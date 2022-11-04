<div class="sidebar-row">
    <h6>{__("admin_search_title")}</h6>

    <form action="{""|fn_url}" name="employees_search_form" method="get" class="{$form_meta}">

        {* {capture name="simple_search"} *}

            <div class="sidebar-field">
                <label for="first_name">{__("first_name")}</label>
                <input type="text" name="first_name" id="first_name" value="{$search.first_name}" size="30" />
            </div>

            <div class="sidebar-field">
                <label for="last_name">{__("last_name")}</label>
                <input type="text" name="last_name" id="last_name" value="{$search.last_name}" size="30" />
            </div>

            <div class="sidebar-field">
                <label for="email">{__("email")}</label>
                <input type="text" name="email" id="email" value="{$search.email}" size="30" />
            </div>

            <div class="sidebar-field">
                <label for="mobile">{__("mobile")}</label>
                <input type="text" name="mobile" id="mobile" value="{$search.mobile}" size="50" />
            </div>

        {* {/capture} *}
        {include file="buttons/search.tpl" but_name="dispatch[{$dispatch}]"}
        
    </form>

</div>
<hr>