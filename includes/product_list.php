<section id="product_list">
    <div class="box" id="welcbox">
        Currently logged in as from Test Company
        <ul>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>
    <div id="main">
    <div class="hiddenMenu">
        <h1 style="color:#C00400">Production Lists</h1><br>

        <b>Data Entry Screen Format:&nbsp;</b>

        <ul class="product_list">
            <li>
                <input type="radio" name="bakery" id="core">
                <label for="core"><?= CORE_UNIT ?></label>
            </li>
            <li>
                <input type="radio" name="bakery" id="add">
                <label for="add"><?= ADD_UNIT ?></label>
            </li>
            <li>
                <input type="radio" name="bakery" id="all">
                <label for="all"><?= All_UNIT ?></label>
            </li>
        </ul>
        <form method="post" class="bakery">
            <input type="hidden" id="selected_code" name="code" value="core">
        </form>
    </div>

