<?php 

session_start(); 


?>

<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" lang="arbic">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="icon" type="image/png" href="img/icon.png"/>
    <link rel="shortcut icon" href="img/icon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- <link rel="stylesheet" href="bootstrap-icons/font/bootstrap-icons.css"> -->
    <script src="js/jquery.min.js"></script>
    

    <title>



        <?php 
        function titleprint($cheak1,$WhatIneedPrint)
        {
                   $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                     if (strpos($url,$cheak1) !== false) {
                    # code...
                    echo $WhatIneedPrint;
                    }
        }
        

         titleprint('index.php' , 'الصفحة الرئيسية');
         titleprint('do=add' , '|| اضافه   ');
         titleprint('towasel' , ' كتابة وصل  ');
         titleprint('dean' , ' الديون   و الوصولات');
         titleprint('car' , 'سيارة المخزن');
         titleprint('ih.php' , ' المخزن ');
         titleprint('jr.php' , 'جرد الاثاث والأجهزة المكتبية');
         titleprint('jrsearch.php' , 'الجرد');
         titleprint('jrsearch.php' , 'الجرد');
         titleprint('mr.php' , 'المصاريف');
         titleprint('rk.php' , 'الراجع والكسر');
         titleprint('rk.php' , 'الراجع والكسر');
         titleprint('color.php' , 'اضافة لون ');
         titleprint('waselmo.php' , ' منظم الوصولات ');
         titleprint('addgoodsname.php' , ' اضافة اسم البضاعه ');
         titleprint('loginadmin.php' , ' تسجيل الدخول  ');
         titleprint('allinone.php' , '  الاحصائيات  ');
        
         ?>

    </title>
    
  </head>
  <body>
  <!-- <a href="/any/url/delete.php?ref=ID" data-confirm="Are you sure you want to delete?">Delete</a> -->

<!-- <a href="#" data-href="delete.php?id=23" data-toggle="modal" data-target="#confirm-delete">Delete record #23</a>

<button class="btn btn-default" data-href="/delete.php?id=54" data-toggle="modal" data-target="#confirm-delete">
    Delete record #54
</button> -->

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog text-center">
        <div class="modal-content text-center">
            <div class="modal-header text-center">
                حذف عنصر
            </div>
            <div class="modal-body text-center">
                هل أنت متأكد من حذف هذا العنصر ؟
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>


<script>


$(document).ready(function() {
    $('a[data-confirm]').click(function(ev) {
        var href = $(this).attr('href');

        if (!$('#dataConfirmModal').length) {
            $('body').append('<div id="dataConfirmModal" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel">Please Confirm</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button><a class="btn btn-primary" id="dataConfirmOK">OK</a></div></div>');
        } 
        $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
        $('#dataConfirmOK').attr('href', href);
        $('#dataConfirmModal').modal({show:true});
        return false;
    });
});

$('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});

</script>