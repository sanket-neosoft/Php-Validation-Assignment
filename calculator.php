<!-- header -->
<?php
include("nav.php");
?>
<!-- main content -->
<div class="container my-5 py-5">
    <div class="row ">
        <div class="col-sm my-5  text-center">
            <h4 class="mb-5">Calculator</h4>
            <table class="table table-striped table-bordered">
                <tr>
                    <td colspan="3" id="op" class="op"></td>
                    <td id="clear"class="but" onclick="backspace()"><i class="bi bi-backspace-fill"></i></td>
                </tr>
                <tr>
                    <td class="but" id="7" onclick="getID(this)">7</td>
                    <td class="but" id="8" onclick="getID(this)">8</td>
                    <td class="but" id="9" onclick="getID(this)">9</td>
                    <td class="but" id="div" onclick="getID(this)">/</td>
                </tr>
                <tr>
                    <td class="but" id="4" onclick="getID(this)">4</td>
                    <td class="but" id="5" onclick="getID(this)">5</td>
                    <td class="but" id="6" onclick="getID(this)">6</td>
                    <td class="but" id="mul" onclick="getID(this)">*</td>
                </tr>
                <tr>
                    <td class="but" id="1" onclick="getID(this)">1</td>
                    <td class="but" id="2" onclick="getID(this)">2</td>
                    <td class="but" id="3" onclick="getID(this)">3</td>
                    <td class="but" id="add" onclick="getID(this)">+</td>
                </tr>
                <tr>
                    <td class="but" id="dec" onclick="getID(this)">.</td>
                    <td class="but" id="0" onclick="getID(this)">0</td>
                    <td class="but" id="pow" onclick="getID(this)">^</td>
                    <td class="but" id="sub" onclick="getID(this)">-</td>

                </tr>
                <tr>
                    <td class="but" id="clr" class="bg-light" onclick="clr()" colspan="2">Clear</td>
                    <td id="equal" onclick="equal()" class="but" colspan="2">=</td>
                </tr>
            </table>
        </div>
        <div class="col-sm my-5 text-center history">
            <h4 class="mb-5">History</h4>
            <div id="history"></div>
        </div>
    </div>
</div>
<!-- footer -->
<?php
include("footer.php");
?>
<script src="js/cal.js"></script>
</body>

</html>