<?php

use Tygh\Tygh;

defined('BOOTSTRAP') or die('Access denied');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	if ($mode === 'add' || $mode === 'update') {
		$validate = true;
		$url_referer = $_REQUEST['current_url'];
		unset($_REQUEST['current_url']);

		if (!fn_required($_REQUEST['first_name'])) {
			fn_set_notification('W', __('warning'), 'First Name is Required');
			$validate = false;
		}
	
		if (!fn_required($_REQUEST['last_name'])) {
			fn_set_notification('W', __('warning'), 'Last Name is Required');
			$validate = false;
		}
	
		if (!fn_required($_REQUEST['email'])) {
			fn_set_notification('W', __('warning'), 'Email is Required');
			$validate = false;
		} elseif (!fn_validate_email($_REQUEST['email'])) {
			fn_set_notification('W', __('warning'), 'Invalid Email format');
			$validate = false;
		} else {
			$emp_id = $_REQUEST['id'] ?? null;
			if (employee_email_exist($_REQUEST['email'], $emp_id)) {
				fn_set_notification('W', __('warning'), 'Enter unique email id');
				$validate = false;
			}
		}
	
		if (!fn_required($_REQUEST['mobile'])) {
			fn_set_notification('W', __('warning'), 'Mobile is Required');
			$validate = false;
		} else {
			if (!fn_validate_mobile($_REQUEST['mobile'])) {
				fn_set_notification('W', __('warning'), 'Invalid Mobile Format');
				$validate = false;
			}
		}
	
		if (!fn_required($_REQUEST['designation'])) {
			fn_set_notification('W', __('warning'), 'Designation is Required');
			$validate = false;
		}
	
		if (!fn_required($_REQUEST['date_of_joining'])) {
			fn_set_notification('W', __('warning'), 'Date of joining is Required');
			$validate = false;
		} else {
			if (!fn_validate_date($_REQUEST['date_of_joining'])) {
				fn_set_notification('W', __('warning'), 'Invalid date of joining format');
				$validate = false;
			}
		}
	
		if (!fn_required($_REQUEST['salary_per_month'])) {
			fn_set_notification('W', __('warning'), 'Salary per month is Required');
			$validate = false;
		} else {
			if (!validate_number($_REQUEST['salary_per_month'])) {
				fn_set_notification('W', __('warning'), 'Invalid salary format');
				$validate = false;
			}
		}
	
		if (!$validate) {
			Tygh::$app['view']->assign('selected_employee', $_REQUEST);
			return [CONTROLLER_STATUS_REDIRECT, "$url_referer"];
		}
		fn_add_update_employee($_REQUEST);
		return [CONTROLLER_STATUS_OK, 'employees.manage'];	
	}
}

if ($mode === 'manage') {
	$items_per_page = 5;
	list($employee, $search) = fn_get_employee($items_per_page, $_REQUEST);
	Tygh::$app['view']->assign('search', $search);
	Tygh::$app['view']->assign('employee', $employee);
}

if ($mode === 'update' || $mode === 'add') {

	$designation_list = [
		'employee',
		'manager'
	];
	Tygh::$app['view']->assign('designation_list', $designation_list);

	$emp_id = (isset($_REQUEST['id'])) ? $_REQUEST['id'] : '' ;

	if (!empty($emp_id)) {
		$selected_employee = fn_get_selected_employee($emp_id);
		
		if (!$selected_employee) {
			return [CONTROLLER_STATUS_REDIRECT, 'employees.manage'];
		}
		
		Tygh::$app['view']->assign('selected_employee', $selected_employee);
	}
}

if ($mode === 'delete') {
	
	$emp_id = ($_REQUEST['id']) ? $_REQUEST['id'] : '' ;

 	$result = fn_delete_employee($emp_id);
	if (!$result) {
		return [CONTROLLER_STATUS_REDIRECT, 'employees.manage'];
	}
	return [CONTROLLER_STATUS_OK, 'employees.manage'];
}