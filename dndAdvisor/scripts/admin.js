function deleteUser(id) {
    var data = {
      user_id: id
    }
    $.post('../../scripts/delete_user.php',data,function(){location.reload();});
  }

  function updateUser(id)
  {
    var data = {
      user_id: id
    }
    $.post('../../pages/UI/update_user_page.php',data,
    function(){location.replace('../../pages/UI/update_user_page.php');});
  }

  function deleteChar(id) {
    var data = {
      char_id: id
    }
    $.post('../../scripts/delete_character.php',data,function(){location.reload();});
  }

