<?php


if ( !has_access (NEWS_EDITOR) )
{
    trigger_error ($lang['ind19'], E_USER_WARNING);
}

if ( !check_form_character() )
{
    trigger_error ($lang['ind298'], E_USER_WARNING);
}

$comid = ( isset ($PVARS['comid']) ) ? $PVARS['comid'] : array();

if ( sizeof ($comid) <= 0 )
{
    trigger_error ('There are no comments to validate.', E_USER_ERROR);
}

validate_comments ($comid);

$title = $lang['ind146'];
echo make_redirect ($lang['ind321'], '?id=comments_manage', $lang['ind334']);


?>