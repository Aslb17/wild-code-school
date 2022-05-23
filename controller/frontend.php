<?php

require('./model/frontend.php');

function listMembers()
{
	$argonautes = getList();

	require('./view/frontend/indexView.php');
}

function addMember($name)
{
    $affectedLines = newMember($name);
    $argonautes = getList();

    if ($affectedLines === false) {
        die('Impossible d\'ajouter cet argonaute !');
    }
    elseif (count($argonautes)== 50) {
        require('./view/frontend/endList.php');
    } 
    else
    {
        require('./view/frontend/createMember.php');
    
    }
}