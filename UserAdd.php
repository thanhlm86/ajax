<?php
include_once 'Class/UserClass.php';
$user = new Class_UserClass();
$user->name = $_REQUEST['name'];
$user->age = $_REQUEST['age'];
$user->address = $_REQUEST['address'];
$addUser = $user->addUser();
$userList = $user->getAllUser();
if ($query) {
    ?>
    <script>
        alert("Thêm mới thất bại");
    </script>
<?php
} else {
    ?>
    <script>
        alert("Thêm mới thành công");
    </script>
<?php
}
?>
<table id="table_results" class="data">
    <thead>
    <tr>
        <th width="40">STT</th>
        <th width="250">Tên</th>
        <th width="30">Tuổi</th>
        <th width="350">Địa Chỉ</th>
        <th width="30" colspan="2">Hành động</th>
    </tr>
    </thead>
    <?php
    $stt = 0;
    foreach ($userList as $userInfo) {
        $stt++;
        ?>
        <tbody>
        <tr <?php if ($stt % 2) { ?> class="odd"<?php } else { ?> class="even" <?php } ?>>

            <td align="center"><?php echo $stt; ?></td>
            <td align="center">
                <div id="ten_<?php echo $userInfo->ajax_id; ?>"><?php echo $userInfo->name; ?></div>
            </td>
            <td align="center">
                <div id="tuoi_<?php echo $userInfo->ajax_id; ?>"><?php echo $userInfo->age; ?></div>
            </td>

            <td align="center">
                <div id="diachi_<?php echo $userInfo->ajax_id; ?>"><?php echo $userInfo->address; ?></div>
            </td>

            <td align="center"><a href="javascript:void(0)" id="sua" onclick="setForm(<?php echo $userInfo->ajax_id; ?>)"><img
                        src="images/edit.png" height="16" width="16"></a></td>
            <td align="center"><a href="javascript:void(0)" id="xoa" onclick="xoa(<?php echo $userInfo->ajax_id ?>)"><img
                        src="images/drop.png" height="16" width="16"></a></td>
        </tr>
        </tbody>
    <?php
    }
    ?>
</table>