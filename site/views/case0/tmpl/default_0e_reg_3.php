<!--<ul class="breadcrumb" >-->
<!--    <li itemprop="itemListElement" ><a class="pathway" itemprop="item" href="index.php/wizard?view=case0&position=0a">Start wizard</a> <span class="divider"><img src="/www.caress.com/uvasite/media/system/images/arrow.png" alt=""></span>-->
<!--    </li>-->
<!--    <li itemprop="itemListElement" ><a href="index.php/wizard?view=case0&position=0b">Stakeholder type</a></li>-->
<!--    <li itemprop="itemListElement" ><a href="index.php/wizard?view=case0&position=0c">User interest on HHCP</a></li>-->
<!--    <li><a href="index.php/wizard?view=case0&position=0d">User Country</a></li>-->
<!--    <li><a href="index.php/wizard?view=case0&position=0e">Info sum-up and possible registration</a></li>-->
<!--    <li class="active"><a href="index.php/wizard?view=case0&position=0e_reg_1">Registration - Username</a></li>-->
<!--</ul>-->

<h1>Registration</h1>

<div class="row-fluid">

    <div class="span4 center topspacing" >
        <img src="components/com_wizard/images/gufo.png" width="150" />
    </div>

    <div class="span8">

        <h4>Email</h4>

        <form id="form" method="post" action="index.php">
            <div class="">


                <input type="email"  name="email" id="email" placeholder="email" >

                <input type="hidden"  name="option" value="com_wizard">
                <input type="hidden"  name="view" value="case0">
                <input type="hidden"  name="position" value="0g">

                <br>
                <button type="submit" class="btn btn-primary" >Next</button>
            </div>
        </form>


    </div>



</div>

<script type="text/javascript">

    var valid = false;

    $('#form').submit(function (e){
        if(valid === false) {
            e.preventDefault();

            field = $('#email').val();

            $.post("index.php", {option: 'com_wizard', task: 'checkemail', email: field})
                .done(function (data) {
                    if (data > 0) {
                        alert("Email alredy used!");
                        return false;
                    }
                    else {
                        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(field)) {
                            valid = true;
                            $('#form').submit();
                        }
                        else {
                            alert("You have entered an invalid email address!")
                            return false;
                        }
                    }
                });
        }
    })

</script>
