{if $selected_employee}
	{assign var="id" value=$selected_employee.id}
{else}
	{assign var="id" value=0}
{/if}

{capture name="mainbox"}
	<form name="employee_form" action="{""|fn_url}" method="post"
		class="admin-content-external-form form-horizontal form-edit">

		<input type="hidden" name="id" value="{$id}" />
		<input type="hidden" name="current_url" value="{$config.current_url}" />

		<div class="control-group">
			<label class="control-label" for="first_name">{__("first_name")}</label>{*  cm-required *}
			<div class="controls">
				<input type="text" id="first_name" name="first_name" value="{$selected_employee.first_name|default:''}"
					class="ty-input-text cm-focus" />
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="last_name">{__("last_name")}</label>{*  cm-required *}
			<div class="controls">
				<input type="text" id="last_name" name="last_name" value="{$selected_employee.last_name|default:''}" />
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="email">{__("email")}</label>{*  cm-required cm-email *}
			<div class="controls">
				<input type="text" id="email" name="email" value="{$selected_employee.email|default:''}" class="ty-input-text cm-focus" />
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="mobile">{__("mobile")}</label>{*  cm-required cm-phone *}
			<div class="controls">
				<input type="text" id="mobile" name="mobile" value="{$selected_employee.mobile|default:''}" class="ty-input-text cm-focus" />
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="designation">{__("designation")}</label>{*  cm-required cm-multiple *}
			<div class="controls">
			<select name="designation" id="designation" class="ty-input-text cm-focus">
				<option value="">--Select Designation--</option>
				{if $designation_list}
					{foreach from=$designation_list item=$designation}
							{assign var="selected_designation" value=($selected_employee.designation === $designation) ? 'selected' : ''}
						<option value="{$designation}" {$selected_designation|default:''}>{ucwords($designation)}</option>
					{/foreach}
				{/if}
				
				</select>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="date_of_joining">{__("date_of_joining")}</label>{*  cm-required, date *}
			<div class="controls">
				<input type="date" id="date_of_joining" name="date_of_joining" value="{$selected_employee.date_of_joining|default:''}"
					class="ty-input-text cm-focus" />
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="salary_per_month">{__("salary_per_month")}</label>{*  cm-required cm-integer *}
			<div class="controls">
				<input type="text" id="salary_per_month" name="salary_per_month" value="{$selected_employee.salary_per_month|default:''}"
					class="ty-input-text cm-focus" />
			</div>
		</div>
	</form>
{/capture}{*mainbox*}
{capture name="buttons"}
	{if $selected_employee}
		{include file="buttons/button.tpl" but_text=__("save") but_meta="dropdown-toggle" but_role="submit-link" but_name="dispatch[employees.`$runtime.mode`]" but_target_form="employee_form" save=$id}
	{else}
		{include file="buttons/button.tpl" but_text=__("create") but_meta="dropdown-toggle" but_role="submit-link" but_name="dispatch[employees.`$runtime.mode`]" but_target_form="employee_form" save=$id}
	{/if}
{/capture}
{include file="common/mainbox.tpl"
    title=$title
    content=$smarty.capture.mainbox
    buttons=$smarty.capture.buttons
sidebar=$smarty.capture.sidebar}