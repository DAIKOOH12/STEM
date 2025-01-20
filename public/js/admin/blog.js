// $(document).ready(function () {
//     tinymce.remove();
//     tinymce.init({
//         selector: "#mytextarea",
//         plugins:
//             "advtemplate preview powerpaste casechange searchreplace autolink autosave save directionality advcode visualblocks visualchars fullscreen image link media mediaembed codesample advtable table charmap pagebreak nonbreaking anchor advlist lists checklist wordcount tinymcespellchecker a11ychecker help formatpainter permanentpen pageembed linkchecker emoticons export editimage tinydrive ",
//         height: "700px",
//         toolbar_sticky: true,
//         toolbar: "insertfile image link | code",
//         icons: "thin",
//         automatic_uploads: true,
//         autosave_restore_when_empty: true,
//         content_style: `
//             body {
//                 background: #fff;
//             }
//             @media (min-width: 840px) {
//                 html {
//                     background: #eceef4;
//                     min-height: 100%;
//                     padding: 0 .5rem
//                 }

//                 body {
//                     background-color: #fff;
//                     box-shadow: 0 0 4px rgba(0, 0, 0, .15);
//                     box-sizing: border-box;
//                     margin: 1rem auto 0;
//                     max-width: 820px;
//                     min-height: calc(100vh - 1rem);
//                     padding:4rem 6rem 6rem 6rem
//                 }
//             }
//         `,
//         setup: function (editor) {
//             editor.on("change", function (e) {
//                 console.log(tinymce.get('mytextarea').getContent());
//             });
//         },
//     });
// });
// const { ClassicEditor, Essentials, Bold, Italic, Font, Paragraph } = CKEDITOR;

// ClassicEditor.create(document.querySelector("#mytextarea"), {
//     licenseKey:
//         "eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3Njg4NjcxOTksImp0aSI6IjQ5ZDlhYzc2LWQzM2MtNDBkNi1iOGQxLWUzODgwZTIzNmRiYSIsImxpY2Vuc2VkSG9zdHMiOlsiMTI3LjAuMC4xIiwibG9jYWxob3N0IiwiMTkyLjE2OC4qLioiLCIxMC4qLiouKiIsIjE3Mi4qLiouKiIsIioudGVzdCIsIioubG9jYWxob3N0IiwiKi5sb2NhbCJdLCJ1c2FnZUVuZHBvaW50IjoiaHR0cHM6Ly9wcm94eS1ldmVudC5ja2VkaXRvci5jb20iLCJkaXN0cmlidXRpb25DaGFubmVsIjpbImNsb3VkIiwiZHJ1cGFsIl0sImxpY2Vuc2VUeXBlIjoiZGV2ZWxvcG1lbnQiLCJmZWF0dXJlcyI6WyJEUlVQIl0sInZjIjoiNDQ5N2IwODAifQ.SiAyfuQ4xb1lmHxKkoMxrZSey7pnD4XjqhYgsoC1c-a_BdLwEXtac8m9LOztmg-uRRzv9fg4g6wUWtfyPE8IVA",
//     plugins: [Essentials, Bold, Italic, Font, Paragraph, Image],
//     toolbar: [
//         "undo",
//         "redo",
//         "|",
//         "bold",
//         "italic",
//         "|",
//         "fontSize",
//         "fontFamily",
//         "fontColor",
//         "fontBackgroundColor",
//         "|",
//         "formatPainter",
//          'insertImage'
//     ],
// })
//     .then(/* ... */)
//     .catch(/* ... */);
