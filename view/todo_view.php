<?php
include('../function_common/check_login.php');
include('../controller/todo_list/get_todo_list_handler.php');
include('./components/header.php');
checkLogin();
?>

<div>
    <div class="flex flex-end padding-20" >
        <a class="margin-right-15 text-red" href="../controller/logout_handler.php">Logout</a>
        <a class="margin-right-15 text-red" href="./change_password_view.php">Change password</a>
        <a class="margin-right-15 text-red" href="../controller/delete_account_handler.php">Delete account</a>
    </div>
    <div class="flex item-center width-100">
        <div class="flex item-center font-size-20 bg-gray width-100">Hello <?php echo $_SESSION["username"];?></div>
    </div>
    <form action="../controller/todo_list/add_todo_handler.php" method="post">
        <div class="flex margin-auto width-fit margin-top-30">
            <label class="margin-right-15" for="taskName">Task Name:</label>
            <input class="margin-right-15" type="text" id="taskName" name="taskName" required>
            <button class="btn" type="submit">Add</button>
        </div>
    </form>
    <div class="flex width-100 flex-around margin-top-30">
        <div class="position-relative">
            <div class="title">Todo</div>
            <table class="table-root">
                <colgroup>
                    <col style="width: 70%;">
                    <col style="width: 30%;">
                </colgroup>
                <thead>
                <tr>
                    <th>Task Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <!-- Add your table rows here -->
                <?php
                foreach ($taskOpens as $task) {
                    echo  "<tr>";
                    echo  '<td class="flex item-center"><span class="line-height-25">'.$task["task_name"].'</span></td>';
                    echo  '<td>
                            <div  class="flex item-center">
                                <form class="margin-right-15" action="../controller/todo_list/change_status_todo_handler.php" method="POST">
                                    <input type="hidden" name="taskId" value='.$task["id"].'>
                                    <input type="hidden" name="status" value="1">
                                    <button type="submit">Done</button>
                                </form> 
                                <form action="../controller/todo_list/delete_todo_handler.php" method="POST">
                                    <input type="hidden" name="taskId" value='.$task["id"].'>
                                    <button type="submit">Delete</button>
                                </form> 
                            </div>
                        
                       </td>';
                    echo  "</tr>";
                }
                ?>
                </tbody>
            </table >
        </div>
        <div class="position-relative">
            <div class="title">Done</div>
            <table  class="table-root">
                <colgroup>
                    <col style="width: 70%;">
                    <col style="width: 30%;">
                </colgroup>
                <thead>
                <tr>
                    <th>Task Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <!-- Add your table rows here -->
                <?php
                foreach ($taskDones as $task) {
                    echo  "<tr>";
                    echo  '<td class="flex item-center"><span class="line-height-25">'.$task["task_name"].'</span></td>';
                    echo  '<td>
                        <div class="flex item-center">
                            <form class="margin-right-15"  action="../controller/todo_list/change_status_todo_handler.php" method="POST">
                                <input type="hidden" name="taskId" value='.$task["id"].'>
                                <input type="hidden" name="status" value="0">
                                <button type="submit">Re Open</button>
                            </form> 
                             <form  action="../controller/todo_list/delete_todo_handler.php" method="POST">
                                <input type="hidden" name="taskId" value='.$task["id"].'>
                                <button type="submit">Delete</button>
                            </form> 
                        </div>
                       </td>';
                    echo  "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?php include('./components/footer.php'); ?>