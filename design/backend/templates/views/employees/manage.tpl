{capture name="mainbox"}
{* {$smarty.capture.advanced_search|fn_print_r} *}
	<form action="{""|fn_url}" method="post" target="_self" name="orders_list_form" id="orders_list_form" data-ca-is-multiple-submit-allowed="true">

	{include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id=$smarty.request.content_id}

	{capture name="sidebar"}
		{include file="views/employees/components/employees_search_form.tpl" dispatch="employees.manage"}
	{/capture}

	{if ($employee)}

	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>S.No.</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Designation</th>
				<th>Date of Joining</th>
				<th>Salary Per Month</th>
				<th>Actions</th>
			</tr>
		</thead>
		{* <tbody> *}
				{foreach from=$employee item=$data}
					<tr>
						<td>{$data.id}</td>
						<td>{$data.first_name} {$data.last_name}</td>
						<td>{$data.email}</td>
						<td>{$data.mobile}</td>
						<td>{ucfirst($data.designation)}</td>
						<td>{date('d-M-y', strtotime($data.date_of_joining))}</td>
						<td>{$data.salary_per_month}</td>
						<td>
							{btn type="list" text=__("edit") href="employees.update?id={$data.id}"}
							{btn type="list" text=__("delete") href="employees.delete?id={$data.id}"}
						</td>
					</tr>

				{/foreach}
		{* </tbody> *}
	</table>
{else}
	<p class="no-items">{__("no_data")}</p>
{/if}

{* <div class="clearfix"> *}
	{include file="common/pagination.tpl" div_id=$smarty.request.content_id}
{* </div> *}
</form>

{/capture} {* mainbox *}
{capture name="adv_buttons"}
	<a class="btn cm-tooltip" href="{"employees.add"|fn_url}" title="add employee">
		{include_ext file="common/icon.tpl" class="icon-plus"}
	</a>
{/capture}
{include file="common/mainbox.tpl" title='Manage Employees' content=$smarty.capture.mainbox sidebar=$smarty.capture.sidebar adv_buttons=$smarty.capture.adv_buttons buttons=$smarty.capture.buttons content_id="manage_users"}