<?php
if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_delete_employee($employee_id)
{
	$result = db_query("DELETE FROM employee WHERE id = ?i", $employee_id);
	return $result;
}

function fn_get_selected_employee($employee_id = '')
{	
	$result = db_get_row("SELECT * FROM employee WHERE id = ?i", $employee_id);
	return $result;
}

function fn_add_update_employee($params)
{

		unset($params['security_hash']);
		unset($params['dispatch']);
		
		$id = $params['id'];
		unset($params['id']);

		if (empty($id)) {
			$result = db_query('INSERT INTO employee ?e', $params);
		} else {
			$result = db_query('UPDATE employee SET ?u WHERE id = ?i', $params, $id);
		}
		return $result;
}
function fn_get_employee($items_per_page, $params)
{
	$default_params = [
		'page'           => 1,
		'items_per_page' => $items_per_page,
	];

	$params = array_merge($default_params, $params);
	$condition = '';


	if (!empty($params['first_name'])) {
		$condition .= db_quote(" AND first_name LIKE ?l", '%' . $params['first_name'] . '%');
	}

	if (!empty($params['last_name'])) {
		$condition .= db_quote(" AND last_name LIKE ?l", '%' . $params['last_name'] . '%');
	}

	if (!empty($params['email'])) {
		$condition .= db_quote(" AND email LIKE ?l", '%' . $params['email'] . '%');
	}

	if (!empty($params['mobile'])) {
		$condition .= db_quote(" AND mobile LIKE ?l", '%' . $params['mobile'] . '%');
	}

	$limit = '';
	if (!empty($params['items_per_page'])) {
			$limit = db_paginate($params['page'], $params['items_per_page']);
			$params['total_items'] = db_get_field(
					'SELECT COUNT(DISTINCT (id))'
					. ' FROM employee'
					. ' WHERE 1 ?p',
					$condition
			);
	}
	$result = db_get_array("SELECT * FROM employee WHERE 1 $condition ORDER BY id DESC $limit");
	return [$result, $params];

}

function fn_required($input)
{
	if (!empty($input)) {
		return true;
	}
	return false;
}


function fn_validate_mobile($mobile)
{
	if (preg_match('/^[0-9]{10}+$/', $mobile)) {
		return true;
	}
	return false;
}

function fn_validate_date($date)
{
	if (preg_match('/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/', $date)) {
		return true;
	}
	return false;
}

function validate_number($number)
{
	if (is_numeric($number)) {
		return true;
	}
	return false;
}

function employee_email_exist($email, $id)
{
	$condition = '';
	if (!empty($id)) {
		$condition .= db_quote(" AND id != ?i", $id);
	}

	$result = db_get_row("SELECT COUNT(1) as count_email FROM employee WHERE email = ?s $condition", $email);
	if ($result['count_email'] > 0) {
		return true;
	}
	return false;
}

?>