<?php define('TITLE', 'TASKS'); ?>
<?php include '../config/settings.php'; ?>
<?php include '../include/database.php'; ?>
<?php include '../include/header.php'; ?>
    
<h2>TASKS</h2>

<table width="100%" border="1" cellpadding="10"> 
    <tr>
        <th width="40" nowrap="nowrap">№</th>
        <th width="200" nowrap="nowrap" align="left">NAME</th>
        <th width="100%" align="left">DESCRIPTION</th>
    </tr>
    <tr>
        <td align="center">01.</td>
        <td align="left">FIRST</td>
        <td align="left">FIRST TASK...</td>
    </tr>
    <tr>
        <td align="center">02.</td>
        <td align="left">SECOND</td>
        <td align="left">SECOND TASK...</td>
    </tr>
</table>

<?php include '../include/footer.php'; ?>