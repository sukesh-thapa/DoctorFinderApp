<?php

require_once("/DBAdapter.php");
if($_POST['action']=="save"){

         $dbAdapter=new DBAdapter();
         $Doc_Name=$_POST['Doc_Name'];
         $Specialization=$_POST['Specialization'];
         $Username=$_POST['Username'];
        $dbAdapter->insert(array($Doc_Name,$Specialization,$Username));
}else if($_POST['action']=="update")
{
         $dbAdapter=new DBAdapter();
         $Doc_Id=$_POST['Doc_Id'];
         $Doc_Name=$_POST['Doc_Name'];
         $Specialization=$_POST['Specialization'];
         $Username=$_POST['Username'];
        $dbAdapter->update($Doc_Id,array($Doc_Name,$Specialization,$Username));

}else if($_POST['action']=="delete")
{
         $dbAdapter=new DBAdapter();
         $Doc_Id=$_POST['Doc_Id'];

        $dbAdapter->delete($Doc_Id);
}
?>