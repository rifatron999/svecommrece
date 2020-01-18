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
    selector: 'textarea#basic-example',
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

// admin fac assign from P_C status
$(document).on('change','.status_check',function()
{
    let status_check = document.getElementById('status_check');
    let fac = document.getElementById('fac');
    let schedule = document.getElementById('schedule');
    if(status_check.value == 'Upcoming'){
        fac.style.display = 'block';
        schedule.style.display = 'block';
    }
    if(status_check.value == 'Published'){
        fac.style.display = 'none';
        schedule.style.display = 'none';
    }
});
// admin fac assign from P_C status #

$(document).on('change','.status_check2',function()
{
    let status_check2 = document.getElementById('status_check2');
    let fac2 = document.getElementById('fac2');
    let schedule2 = document.getElementById('schedule2');
    if(status_check2.value == 'Upcoming'){
        fac2.style.display = 'block';
        schedule2.style.display = 'block';
    }
    if(status_check2.value == 'Published'){
        fac2.style.display = 'none';
        schedule2.style.display = 'none';
    }
});
//faculty note / assignment upload
$(document).on('change','#slide_type',function()
{
    let slide_type = document.getElementById('slide_type');
    let type_vis = document.getElementById('type_vis');
    if(slide_type.value == 'Assignment'){
        type_vis.style.display = 'block';
    }
    if(slide_type.value == 'Note'){
        type_vis.style.display = 'none';
        document.getElementById('type_deadline').value = '';
        document.getElementById('type_mark').value = '';
    }
});
function taskList(id) {
    $.ajax({
        url: "/faculty/students_submission",
        data: {tid: id},
        success: function(data){
            $("#taskList").html(data.html);
            console.log(data.html);
        }
    });
}
//mark
function AssignMark(i,id,tid) {
    let mark = document.getElementById('assignment_mark_'+i).value;
    $.ajax({
        url: "/faculty/assignment_mark",
        data: {id: id,tid: tid,mark: mark},
        success: function(data){
            $("#taskList").html(data.html);
            alert('✔ Mark Assigned ');
            console.log(data.html);
        }
    });
}
//gradecal
function gradeCal(term,assignment) {
    if(term == 'Mid')
    {
        let pm = parseFloat(document.getElementById('pm').value);
        let am = parseFloat(document.getElementById('am').value);
        let wm = parseFloat(document.getElementById('wm').value);
        let mq1 = parseFloat(document.getElementById('mq1').value);
        let mq2 = parseFloat(document.getElementById('mq2').value);
        let mq3 = parseFloat(document.getElementById('mq3').value);
        let assm = parseFloat(document.getElementById('assm').value);
        //quiz
        let quiz_assignment = (((((mq1+mq2+mq3)/60)*60)+((assm/assignment)*40))*40)/100;
        let we = (wm/40)*40;
        let performance = (pm/10)*10;
        let attendance  = (am/10)*10;
        let mid_cal = quiz_assignment+we+performance+attendance;
        //alert(mid_cal);
        if(isNaN(mid_cal)){document.getElementById('mid_cal').value = 'Void';}
        else{ document.getElementById('mid_cal').value = mid_cal;}
    }
   else if(term == 'Final')
    {
        let pf = parseFloat(document.getElementById('pf').value);
        let af = parseFloat(document.getElementById('af').value);
        let wf = parseFloat(document.getElementById('wf').value);
        let fq1 = parseFloat(document.getElementById('fq1').value);
        let fq2 = parseFloat(document.getElementById('fq2').value);
        let fq3 = parseFloat(document.getElementById('fq3').value);
        let assf = parseFloat(document.getElementById('assf').value);
        //quiz
        let quiz_assignment = (((((fq1+fq2+fq3)/60)*60)+((assf/assignment)*40))*40)/100;
        let we = (wf/40)*40;
        let performance = (pf/10)*10;
        let attendance  = (af/10)*10;
        let final_cal = quiz_assignment+we+performance+attendance;
       // alert(final_cal);
        if(isNaN(final_cal)){document.getElementById('final_cal').value = 'Void';}
        else{ document.getElementById('final_cal').value = final_cal;}
    }
   /* let status_check = document.getElementById('status_check');
    let fac = document.getElementById('fac');
    let schedule = document.getElementById('schedule');
    if(status_check.value == 'Upcoming')
    {
        fac.style.display = 'block';
        schedule.style.display = 'block';
    }*/

}function assignGrade(term,id,cid)
{
    let mark;
    if(term == 'Mid'){  mark = parseFloat(document.getElementById('mid_cal').value);}
    else if(term == 'Final'){  mark = parseFloat(document.getElementById('final_cal').value);}
    $.ajax({
        url: "/faculty/gradeAssign",
        data: {id:id,mark:mark,cid:cid,term:term},
        success: function(data){
            $("#stdGradeRow").html(data.html);
            // alert('✔ Mark Assigned ');
            console.log(data.html);
        }
    });
}

//faculty note / assignment upload #
//faculty gradeFetch
function gradeFetch(id,cid,sid)
{
    //alert(id);
    $.ajax({
        url: "/faculty/gradeFetch",
        data: {id:id,cid:cid,sid:sid},
        success: function(data){
            $("#gradeFetch").html(data.html);
           // alert('✔ Mark Assigned ');
            console.log(data.html);
        }
    });
}
//student
// assignment upload
function task_upload(name,id,mark,deadline,i)
{
    let task_upload_form = document.getElementById('task_upload_form');
    task_upload_form.style.display = 'block';
    document.getElementById('task_name').value = name;
    document.getElementById('task_mark').value = mark;
    document.getElementById('task_id').value = id;
    document.getElementById('task_deadline').value = deadline;
    $.ajax({
        url: "/student/previousTask",
        data: {tid: id},
        success: function(data){
            $("#previousTasks").html(data.html);
            console.log(data.html);
        }
    });
    if(i == 1){document.getElementById('taskbtn').disabled = true;
        document.getElementById('taskDelete').disabled = true;}
    else{document.getElementById('taskbtn').disabled = false;
        document.getElementById('taskDelete').disabled = false;}
}
// assignment upload #
//student #
//select all
function selectAll() {
    var items = document.getElementsByName('id[]');
    for (var i = 0; i < items.length; i++) {
        if (items[i].type == 'checkbox')
            items[i].checked = true;
    }
}
function UnSelectAll() {
    var items = document.getElementsByName('id[]');
    for (var i = 0; i < items.length; i++) {
        if (items[i].type == 'checkbox')
            items[i].checked = false;
    }
}
//select all *

//ajax for section
function getSectionList()
{
    var title = document.getElementById('title').value;
    var semester = document.getElementById('year').value+'-'+document.getElementById('semester').value;
    var department = document.getElementById('dept').value;
    //alert(department);
    $.ajax({
        url: "/admin/registration/section_check",
        method: "GET",
        data: {title: title,semester: semester,department: department},
        success: function(data){
            $("#section").html(data.html);
            console.log(data.html);
        }
    });
}
//ajax for modal
function getSectionDetails(id,department)
{
    $.ajax({
        url: "/admin/registration/getSectionDetails",
        method: "GET",
        data: {id: id,department: department},
        success: function(data){
            $("#sectionDetails").html(data.html);
            $("#faculty_check2").html(data.html2);
            console.log(data.html);
        }
    });
}
//ajax for course title dept wise
function getCourseList()
{
    var dept = document.getElementById('dept').value;
   // alert(dept);
    $.ajax({
        url: "/admin/registration/course_list",
        method: "GET",
        data: {dept: dept},
        success: function(data){
            $("#title").html(data.html);
            $("#faculty_check").html(data.html2);
            console.log(data.html);
            console.log(data.html2);
        }
    });
}








