/**
 * Called when files are dropped on to the drop target or selected by the browse button.
 * For each file, uploads the content to Drive & displays the results when complete.
 */


function handleFileSelect(evt) {
    evt.stopPropagation()
    evt.preventDefault()


    var fileName = $(this).val().split("\\").pop();

    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);

    var files = evt.dataTransfer ? evt.dataTransfer.files : $(this).get(0).files
    var results = document.getElementById('results')


    /* Clear the results div */
    while (results.hasChildNodes()) results.removeChild(results.firstChild)

    /* Rest the progress bar and show it */
    updateProgress(0)
    document.getElementById('progress-container').style.display = 'block'

        /* Instantiate Vimeo Uploader */
        ;
    (new VimeoUpload({
        name: fileName,
        description: fileName,
        private: true,
        file: files[0],
        // MIX_VIMEO_TOKEN
        token: 'a4e21d56502edc34f8e27e0244fc46b9',
        upgrade_to_1080: true,
        onError: function (data) {
            showMessage('<strong>Error</strong>: ' + JSON.parse(data).error, 'danger')
        },
        onProgress: function (data) {
            updateProgress(data.loaded / data.total)
        },
        onComplete: function (videoId, index) {

            showMessage(`<strong>Upload Successful</strong>: \nThis is ID of video, please copy this <input readonly id="video_id_result" value="${videoId}"></input> &nbsp;
                <button id="copy-button" class="btn btn-outline-success btn-sm" type="button" onclick="handleCopy()" ><i class="fe fe-copy"></i></button>
                    to resource field`)
        }
    })).upload()

    // /* local function: show a user message */
    function showMessage(html, type) {
        /* hide progress bar */
        document.getElementById('progress-container').style.display = 'none'
        /* display alert message */
        var element = document.createElement('div')
        element.setAttribute('class', ' p-3 rounded border border-' + (type || 'success'))
        element.innerHTML = html
        results.appendChild(element)
    }
}

/**
 * Dragover handler to set the drop effect.
 */
function handleDragOver(evt) {
    evt.stopPropagation()
    evt.preventDefault()
    evt.dataTransfer.dropEffect = 'copy'
}

/**
 * Update progress bar.
 */
function updateProgress(progress) {
    progress = Math.floor(progress * 100)
    var element = document.getElementById('progress')
    element.setAttribute('style', 'width:' + progress + '%')
    element.innerHTML = '&nbsp;' + progress + '%'
}
/**
 * Wire up drag & drop listeners once page loads
 */
document.addEventListener('DOMContentLoaded', function () {
    var browse = document.getElementById('browse')
    browse.addEventListener('change', handleFileSelect, false)
})

function handleCopy() {
    /* Get the text field */
    var copyText = document.getElementById("video_id_result");

    var copyButton = document.getElementById("copy-button");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);

    copyButton.classList.remove('btn-outline-success');
    copyButton.classList.add('btn-success');
    copyButton.innerHTML = "copied"
    // 641400179
}
