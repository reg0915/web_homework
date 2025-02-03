<div class="di"
    style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">


    <form method="post" action="./api/edit_insert.php">
        <table width="100%">
            <tbody>

                <label for="name">姓名:</label><br>
                <input type="text" name="name[]" value="<?=$row['name'];?>"><br><br>

                <label for="email">電子郵件:</label><br>
                <input type="text" name="mail[]" value="<?=$row['mail'];?>"><br><br>

                <label for="feedback">意見反饋:</label><br>
                <textarea id="feedback" name="feedback" rows="4" cols="50" required></textarea><br><br>

                <input type="submit" value="提交">

            </tbody>
        </table>


    </form>






</div>