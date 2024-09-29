<html>

<body>

    <h5 id="output" onClick="fun2()"> : </h5>

    <div id="op">

    </div>
</body>

</html>

<script>
    /*
Types : 
1) return if we use return Keyword
2) non-return / void 

syntax : function function_name(parameter_list){
}
eg: Below
*/
    // define
    function fun() {
        console.log('This is function');
        var a = prompt("enter a message");
        document.getElementById('output').innerHTML = a;

    }
    // call function by calling their name

    fun();

    function fun2() {

        document.getElementById('op').innerHTML = "onClick event";

    }
</script>