// is the user logged in or not?
fetch('inc/loggedin.inc.php')
    .then(res => res.json())
    .then(function (res) {
        if (res.status == 'yes') {
            const login = document.querySelector('#login')
            login.style.display = 'none'
            const logout = document.querySelector('#logout')
            logout.style.display = 'inline-block'

            logout.addEventListener('click', function (e) {
                e.preventDefault()
                fetch('inc/loggedin.inc.php')
                    .then(res => res.json())
                    .then(function (res) {
                        if (res.status == 'success') {
                            window.location.href = 'login.php'
                        }
                    })
            })
        } else {
            const login = document.querySelector('#login')
            login.style.display = 'inline-block'
            const logout = document.querySelector('#logout')
            logout.style.display = 'none'
        }
    })



// function readFile(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();

//         reader.onload = function (e) {
//             var htmlPreview =
//                 '<div class="image-preview"><img src="' + e.target.result + '" /></div>' +
//                 '<p>' + input.files[0].name + '</p>';
//             var wrapperZone = $(input).parent();
//             var previewZone = $(input).parent().parent().find('.preview-zone');
//             var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');

//             $('#alert').remove();

//             wrapperZone.removeClass('dragover');
//             previewZone.removeClass('hidden');
//             boxZone.empty();
//             boxZone.append(htmlPreview);
//         };

//         reader.readAsDataURL(input.files[0]);
//     }
// }

// function reset(e) {
//     e.wrap('<form>').closest('form').get(0).reset();
//     e.unwrap();
//     $('#alert').remove();
// }

// $(".dropzone").change(function () {
//     readFile(this);
// });

// $('.dropzone-wrapper').on('dragover', function (e) {
//     e.preventDefault();
//     e.stopPropagation();
//     $(this).addClass('dragover');
// });

// $('.dropzone-wrapper').on('dragleave', function (e) {
//     e.preventDefault();
//     e.stopPropagation();
//     $(this).removeClass('dragover');
// });

// $('.remove-preview').on('click', function () {
//     var boxZone = $(this).parents('.preview-zone').find('.box-body');
//     var previewZone = $(this).parents('.preview-zone');
//     var dropzone = $(this).parents('.form-group').find('.dropzone');
//     boxZone.empty();
//     previewZone.addClass('hidden');
//     reset(dropzone);
// });
