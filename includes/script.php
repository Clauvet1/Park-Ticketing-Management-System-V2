
<script>
function displayAdultPrice(){
var adult_num = document.getElementById("adult_num").value;
var P_price = adult_num*<?= $row['adult_price']?>;
document.getElementById("A_price").innerHTML = P_price;
document.getElementById("A_sits").innerHTML = adult_num;
return P_price;
}
function displayChildPrice(){
var child_num = document.getElementById("child_num").value;
var C_price = child_num * <?= $row['child_price']?>;
document.getElementById("C_price").innerHTML = C_price;
document.getElementById("C_sits").innerHTML = child_num;
var P_price = displayAdultPrice();
var total = C_price + P_price;
document.getElementById("total").innerHTML = total;
}
function total(){
    var adult_num = document.getElementById("adult_num").value;
    var child_num = document.getElementById("child_num").value;
    var P_price = adult_num*<?= $row['adult_price']?>;
    var C_price = child_num * <?= $row['child_price']?>;
    var total = C_price + P_price;
    return total;
}
</script>
