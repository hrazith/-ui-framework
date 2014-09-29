        <h3>Top Nav</h3>
        <p> This is a persistent element that appears on top of the page. It serves as navigation. </p>
        <hr>
        <br>

<div class="topnav" >
            <ul>
                <li><a <?php if ($thisPage=="Home") echo "class=\"active\""; ?> href="index.php"><span class="icon-home"></span>BMSS</a></li>
                <li><a <?php if ($thisPage=="Reports") echo "class=\"active\""; ?> href="reports.php">Reports</a></li>
                <li><a <?php if ($thisPage=="Follow-up") echo "class=\"active\""; ?> href="follow-up.php">For Follow-up&nbsp;<span class="label red">(23 NEW)</span></a></a></li>
                <li><a <?php if ($thisPage=="Comments") echo "class=\"active\""; ?> href="comments.php">Comments</a></li>
                <li><a href="#">Tools</a><?php include_once("_includes/tools-menu.php"); ?></li>
            </ul>
            <hr>
</div>


       