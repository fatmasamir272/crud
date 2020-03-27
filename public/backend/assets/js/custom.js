$(document).ready(function () {

    $('form').parsley();
    $('input[type=checkbox]').each(function () {
        if ($(this).val() == '1') {
            $(this).attr('checked', 'checked');
        }

    });
});

$(document).ready(function () {
    $('#datatable').DataTable();

    //Buttons examples
    var table = $('#datatable-buttons').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf']
    });

    table.buttons().container()
        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
});

$('#datatable').DataTable({
    "language": {
        "sProcessing": "جارٍ التحميل...",
        "sLengthMenu": "أظهر _MENU_ مدخلات",
        "sZeroRecords": "لم يعثر على أية سجلات",
        "sInfo": "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
        "sInfoEmpty": "يعرض 0 إلى 0 من أصل 0 سجل",
        "sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
        "sInfoPostFix": "",
        "sSearch": "ابحث:",
        "sUrl": "",
        "oPaginate": {
            "sFirst": "الأول",
            "sPrevious": "السابق",
            "sNext": "التالي",
            "sLast": "الأخير"
        }

    }

});

window.Parsley.addMessages('ar', {
    defaultMessage: "تأكد من صحة القيمة المدخل",
    type: {
        email: "تأكد من إدخال بريد الكتروني صحيح",
        url: "تأكد من إدخال رابط صحيح",
        number: "تأكد من إدخال رقم",
        integer: "تأكد من إدخال عدد صحيح بدون كسور",
        digits: "تأكد من إدخال رقم",
        alphanum: "تأكد من إدخال حروف وأرقام فقط"
    },
    notblank: "تأكد من تعبئة الحقل",
    required: "هذا الحقل مطلوب",
    pattern: "القيمة المدخلة غير صحيحة",
    min: "القيمة المدخلة يجب أن تكون أكبر من %s.",
    max: "القيمة المدخلة يجب أن تكون أصغر من %s.",
    range: "القيمة المدخلة يجب أن تكون بين %s و %s.",
    minlength: "القيمة المدخلة قصيرة جداً . تأكد من إدخال %s حرف أو أكثر",
    maxlength: "القيمة المدخلة طويلة . تأكد من إدخال %s حرف أو أقل",
    length: "القيمة المدخلة غير صحيحة. تأكد من إدخال بين  %s و %s خانة",
    mincheck: "يجب اختيار %s خيار على الأقل.",
    maxcheck: "يجب اختيار%s خيار أو أقل",
    check: "يجب اختيار بين %s و %s خيار.",
    equalto: "تأكد من تطابق القيمتين المدخلة."
});
window.Parsley.setLocale('ar');


$('input[type=checkbox]').on('change', function () {
    var newVal = ($(this).val() == '1') ? '0' : '1';
    $(this).val(newVal);
});

$('#content_type').on('change', function () {
    var path = $('#content_path');
    var cover = $('#content_cover');
    var images = $('#content_images');
    if ($(this).val() == 'images') {
        images.show();
        path.hide();
    }
    else if ($(this).val() == 'video') {
        images.hide();
        path.show();
        cover.show();
    }
    else {
        images.hide();
        path.hide();
        cover.hide();
    }
});
$('#course_content_type').on('change', function () {
    var path = $('#course_content_path');
    var path_file = $('#course_content_path input');
    var cover = $('#course_content_cover');
    var cover_file = $('#course_content_cover input');
    if ($(this).val() == 'image') {
        path_file.val('');
        path.hide();
        cover.show();
    }
    else if ($(this).val() == 'video') {
        path.show();
        cover.show();
    }
    else if ($(this).val() == 'text') {
        path.hide();
        path_file.val('');
        cover.hide();
        cover_file.val('');
    }
});

function delete_content_image(id, url) {
    var confirmation = confirm('are you sure you want to delete the image?');
    if (confirmation) {
        $.ajax({
            url: url,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (result) {
                result = JSON.parse(result);
                if (result.status == 1) {
                    $('#image_' + id).fadeOut(3000);
                }
                alert(result.message);
            }
        });
    }
    return false;
}

$('input[type=time]').on('change', function () {
    var type = $(this).data('type');

    if ($(this).val() == $('input[name=day_' + $(this).data('id') + '_' + type + ']').val() && $(this).val() != '') {
        alert('start and end time cannot be the same');
        $(this).val('');
    }

});

$('.days_checkbox').on('change', function () {
    console.log($(this).data('id'));
    if (!$(this).checked) {
        $('input[name=day_' + $(this).data('id') + '_start]').val('');
        $('input[name=day_' + $(this).data('id') + '_end]').val('');
    }
});

$('#type').change(function () {
    if ($(this).val() == 'live') {
        $('#link_container').fadeIn(2000);
    }
    else {
        $('#link_container').fadeOut(2000);
    }
    if ($(this).val() == 'attendance') {
        $('#map_container').fadeIn(2000);
    }
    else {
        $('#map_container').fadeOut(2000);
    }
});

//Map Script
// var currentLat;
// var currentLong;
//
// function getLocation() {
//     if (navigator.geolocation) {
//         navigator.geolocation.getCurrentPosition(showPosition);
//     } else {
//         console.log("Geolocation is not supported by this browser.");
//     }
// }

// function showPosition(position) {
//     currentLat = position.coords.latitude;
//     currentLong = position.coords.longitude;
//     console.log(currentLat);
//     console.log(currentLong);
// }

function initAutocomplete() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 24.7249316, lng: 46.5423349},
        zoom: 13,
        mapTypeId: 'roadmap'
    });

    // Create the search box and link it to the UI element.
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function () {
        searchBox.setBounds(map.getBounds());
    });

    var markers = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function () {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }

        // Clear out the old markers.
        markers.forEach(function (marker) {
            marker.setMap(null);
        });
        markers = [];

        // For each place, get the icon, name and location.
        var bounds = new google.maps.LatLngBounds();
        places.forEach(function (place) {
            if (!place.geometry) {
                console.log("Returned place contains no geometry");
                return;
            }
            var icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
                map: map,
                icon: icon,
                title: place.name,
                position: place.geometry.location
            }));

            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
    });

    var marker = new google.maps.Marker({
        position: {lat: 24.7249316, lng: 46.5423349},
        map: map,
        draggable: true,
        title: "Drag to fill!"
    });

//get marker position and store in hidden input
    google.maps.event.addListener(marker, 'dragend', function (evt) {
        document.getElementById("lat").value = evt.latLng.lat().toFixed(3);
        document.getElementById("long").value = evt.latLng.lng().toFixed(3);
    });
}