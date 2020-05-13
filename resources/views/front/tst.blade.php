<!DOCTYPE html>
<html lang="en">
@include('layouts.css')
<body>
@include('layouts.header')
<style>

    #part1 {
        background: url("http://initiativedeveloppeur.fr/wp-content/uploads/2019/03/sea1.jpg") center 0 no-repeat fixed;
    }

    #part2 {
        background: url("http://initiativedeveloppeur.fr/wp-content/uploads/2019/03/sea2.jpg") center 0 no-repeat fixed;
    }

    #part3 {
        background: url("http://initiativedeveloppeur.fr/wp-content/uploads/2019/03/sea3.jpg") center 0 no-repeat fixed;
    }

    .inside {
        margin: 0px auto;
        text-align:justify;

        width: 500px;
        padding: 50px 0px;

        height: 1200px;
    }

</style>

<div id="part1">
    <div class="inside">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ut dignissim tortor, in efficitur risus. Praesent
            ultrices felis mauris, ac sagittis ante condimentum id. Sed venenatis non eros eu molestie. Nam placerat dui urna, non
            consectetur tellus ullamcorper eu. Nullam tempor massa non massa consequat, ut mattis ex maximus. Maecenas bibendum erat
            in est semper condimentum. Vestibulum id ligula arcu. Morbi placerat, ante in interdum dictum, est sem aliquam augue,
            vel congue metus metus nec urna. Proin venenatis cursus ornare.
        </p>
    </div>
</div>


<div id="part2">
    <div class="inside">
        <p>
            Donec suscipit elit blandit cursus convallis. Morbi fringilla massa sed nunc gravida iaculis. Praesent eget nisl a lorem luctus
            sollicitudin. Phasellus ac metus dui. Etiam sit amet rhoncus sapien. Ut id augue id nisi blandit accumsan. Fusce aliquet urna nec
            rhoncus pretium. Praesent tristique ante eget ipsum bibendum, a pharetra dui elementum. Mauris eget pulvinar sapien. Suspendisse
            eget quam est. In fringilla porttitor erat ac imperdiet. Cras consequat vel mauris non aliquam. Proin nec massa tristique neque
            ornare porttitor ut et augue. Sed enim lacus, dictum a sapien vitae, imperdiet semper nunc. Curabitur rutrum faucibus felis eu
            luctus. Quisque libero dui, feugiat eget rhoncus sit amet, ornare ac nibh.
        </p>
    </div>
</div>

<div id="part3">
    <div class="inside">
        <p>
            Proin vestibulum velit venenatis congue tincidunt. Proin dapibus condimentum hendrerit. Vivamus rhoncus vestibulum
            sodales. Donec odio eros, ultricies sed tortor non, faucibus cursus dolor. Duis ac cursus urna, id varius dui. Nulla et
            facilisis orci. Suspendisse consectetur est id facilisis feugiat. Cras finibus magna in neque pretium hendrerit ac quis
            elit. Cras lacinia purus ut lorem dignissim tincidunt. Ut non arcu quis nulla consequat lobortis. Fusce egestas quis
            tortor et scelerisque. Integer fermentum lectus eu sodales consectetur. Phasellus sit amet nisl non lorem pellentesque
            pretium ut eu enim. Integer vestibulum urna magna, ac consequat dui pretium ac. Nam nulla nulla, rhoncus a mollis a,
            condimentum vel lectus.
        </p>
    </div>
</div>
</body>
</html>