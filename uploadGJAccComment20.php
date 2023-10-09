<?php
  function checkCommentBan($userName) {
      $bannedUsers = file('./config/comment_bans.txt', FILE_IGNORE_NEW_LINES);
      return in_array($userName, $bannedUsers);
  }

  if (checkCommentBan($_POST['userName'])) {
      die('-10');
  } else {
      include "incl/comments/uploadGJAccComment.php";
  }
?>
