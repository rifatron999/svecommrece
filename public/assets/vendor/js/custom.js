//tinymce
tinymce.init({
    selector: "textarea#textareatiny",
    plugins: [
        "advlist autolink link autolink preview image imagetools searchreplace table emoticons lists charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
        "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
    ],
    toolbar1: "undo redo | fontsizeselect bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
    toolbar2: "| responsivefilemanager | link unlink anchor autolink | image media imagetools preview  searchreplace table emoticons | forecolor backcolor  | print preview code ",
    image_advtab: true ,
    branding: false,
    fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
    external_filemanager_path:"filemanager/",
    filemanager_title:"Responsive Filemanager" ,
    external_plugins: { "filemanager" : "filemanager/plugin.min.js"}
});
tinymce.init({
    selector: 'textarea.basic-example',
    height: 250,
    menubar: false,
    plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount'
    ],
    toolbar: 'undo redo | formatselect | ' +
        ' bold italic backcolor forecolor | alignleft aligncenter ' +
        ' alignright alignjustify | bullist numlist outdent indent |' +
        ' removeformat | help',
    branding: false,
    content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tiny.cloud/css/codepen.min.css'
    ]
});
//tinymce #
//image preview
function previewImage(event)
{
    var reader = new FileReader();
    var imageField = document.getElementById("image-preview")
    reader.onload = function()
    {
        if(reader.readyState == 2)
        {
            imageField.src = reader.result;
        }
    }
    reader.readAsDataURL(event.target.files[0]);

    document.getElementById("image-field").style.visibility = "visible";
}
//multiple preview
$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input) {
        var $preview = $('#preview').empty();
        if (input.files) {
            var filesAmount = input.files.length;
            if (filesAmount <= 6)
            {
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    $(reader).on("load", function () {
                        $preview.append($("<img/>", {src: this.result, height: 100}));
                    });
                    reader.readAsDataURL(input.files[i]);
                }
            }
            else{alert('Maximum 6 Picture');}
        }
    };
    $('#image-preview').on('change', function() {
        imagesPreview(this);
    });
});
//multiple preview #
// image preview #
//gritter
function gritter_custom(gfor,title,text) {
    if(gfor == 'image upload')
    {
    $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: title,
        // (string | mandatory) the text inside the notification
        text: text,
        image: 'assets/vendor/images/icon/bell.gif',
    });
    }
    return false;
}
//gritter #
//page = vendor>category_management
function setParentId(parent_id)
{
    //alert(parent_id);
    document.getElementById('categoryAdd_parentId').value = parent_id;
}
function setCatUpdate(id,name,description)
{
    //alert(parent_id);
    document.getElementById('cat_update_id').value = id ;
    document.getElementById('cat_update_name').value = name ;
    document.getElementById('cat_update_des').value = description ;
}
//page = vendor>category_management#
//page = vendor>product_management
function percentage_cal (){
let price = document.getElementById('pprice').value;
let offer_percentage = document.getElementById('poffer_percentage').value;
document.getElementById('poffer_price').value = parseInt(price - (parseInt(offer_percentage) * parseInt(price))/100);
}
//page = vendor>product_management#
//page = vendor>offer_management
$(document).on('change','#offer_type',function()
{
    let offer_type = document.getElementById('offer_type');
    let free_product_type = document.getElementById('free_product_type');
    let offer_percentage_type = document.getElementById('offer_percentage_type');
    if(offer_type.value == 'Buy one get one'){
        free_product_type.style.display = 'block';
        offer_percentage_type.style.display = 'none';
        document.getElementById('offer_percentage').value = '';
    }
    if(offer_type.value == 'Discount'){
        free_product_type.style.display = 'none';
        offer_percentage_type.style.display = 'block';
        var items = document.getElementsByName('free_product_ids[]');
        for (var i = 0; i < items.length; i++) {
            if (items[i].type == 'radio')
                items[i].checked = false;
        }
    }
});
//page = vendor>offer_management#
//page = vendor>order_management
function setCancelOrderId(id)
{
    document.getElementById('order_cancel_id').value = id ;
}
function setOrderPayment(id,trx,number)
{
    document.getElementById('order_payment_id').value = id ;
    document.getElementById('order_payment_trx').value = trx ;
    document.getElementById('order_payment_number').value = number ;

}
function setOrderShipping(id,orderid,cn,courirer,date)
{
    document.getElementById('order_shipping_order_id').value = orderid ;
    document.getElementById('order_shippment_id').value = id ;
    document.getElementById('order_shipment_cn').value = cn ;
    document.getElementById('order_shipment_courier').value = courirer ;
    document.getElementById('order_shipment_date').value = date ;
}
//page = vendor>offer_management#









