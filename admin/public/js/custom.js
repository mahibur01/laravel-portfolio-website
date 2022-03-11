$(document).ready(function () {
  $('#VisitorDt').DataTable();
  $('.dataTables_length').addClass('bs-select');
});


function getServicesData() {

  axios.get('/getServicesData').then(function (response) {

    var jsonData = response.data;

    $.each(jsonData, function (i, item) {
      $('<tr>').html(

        "<th><img class='table-img' src=" + jsonData[i].service_img + "></th>" +
        "<th>" + jsonData[i].service_name + "</th>" +
        "<th>" + jsonData[i].service_des + " </th>" +

        "<th><a href='' ><i class='fas fa-edit'></i></a></th>"
        + "<th><a href='' ><i class='fas fa-trash-alt'></i></a></th>"






      ).appendTo('#service_table');

    });


  })
    .catch(function (error) {

    });





}