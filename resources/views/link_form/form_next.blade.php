@extends('layout')


@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<style>

.form {
  width: 100%;
  margin: 0 auto;
}
.form__container {
  position: relative;
  width: 100%;
  height: 200px;
  border: 2px dashed silver;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 18px;
  color: silver;
  margin-bottom: 5px;
}
.form__container.active {
  background-color: rgba(192, 192, 192, 0.2);
}
.form__file {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  cursor: pointer;
  opacity: 0;
}
.form__files-container {
  display: block;
  width: 100%;
  font-size: 0;
  margin-top: 20px;
}
.form__image-container {
  display: inline-block;
  width: 49%;
  height: 200px;
  margin-bottom: 10px;
  position: relative;
}
.form__image-container:not(:nth-child(2n)) {
  margin-right: 2%;
}
.form__image-container:after {
  content: "✕";
  position: absolute;
  line-height: 200px;
  font-size: 30px;
  margin: auto;
  top: 0;
  right: 0;
  left: 0;
  text-align: center;
  font-weight: bold;
  color: #fff;
  background-color: rgba(0, 0, 0, 0.4);
  opacity: 0;
  transition: opacity 0.2s ease-in-out;
}
.form__image-container:hover:after {
  opacity: 1;
  cursor: pointer;
}
.form__image {
  -o-object-fit: contain;
     object-fit: contain;
  width: 100%;
  height: 100%;
}
#container{
  display: grid;
  grid-template-columns: repeat(2,1fr);
  column-gap: 25px;
  justify-content: space-around;
}
#item2 {
  justify-self: end;
}

</style>

@endsection
@section('content')
    
<section class="">

    <div class="container content-box">
        <div class="row">
            <div class="card">
                <div class="card-body">
                     <div class="col-md-12">
                       <h2 class="text-center">Upload Gift Card Details</h2>
                      <form class="form">
                        <label class="form__container" id="upload-container">Click or Drag To Upload Card
                          <input class="form__file" id="upload-files" type="file" accept="image/*" multiple="multiple"/>
                        </label>
                        <div class="form__files-container" id="files-list-container"></div>
                      </form>
                     </div>

                    <div class="row">
                        <div class="input-group mb-3">
                            <button class="btn btn-gift btn-outline-primary" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                              RATE:$275
                            </button>
                            <input type="text" class="form-control" style = "border-radius:45px; border-color:#1266f1" placeholder="Total Amount Is:"/>  
                        </div>
                    </div>
                    <div id="container">
                      <div id="item1">   
                        <a href="/form1" value="Submit" class="btn btn-primary">Back</a> 
                      </div>
                        <div id="item2">   
                          <a href="#" value="Submit" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop">Sell Gift Card</a> 
                        </div>
                    </div>
                    

                         <!-- Modal -->
                      <div class="modal fade" id="staticBackdrop" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">PROCESSING....</h5>
                                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">Kindly Wait While Transaction Is Processing </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- partial -->
<script type="text/javascript">
  const INPUT_FILE = document.querySelector('#upload-files');
const INPUT_CONTAINER = document.querySelector('#upload-container');
const FILES_LIST_CONTAINER = document.querySelector('#files-list-container');
const FILE_LIST = [];
let UPLOADED_FILES = [];

const multipleEvents = (element, eventNames, listener) => {
  const events = eventNames.split(' ');

  events.forEach(event => {
    element.addEventListener(event, listener, false);
  });
};

const previewImages = () => {
  FILES_LIST_CONTAINER.innerHTML = '';
  if (FILE_LIST.length > 0) {
    FILE_LIST.forEach((addedFile, index) => {
      const content = `
        <div class="form__image-container js-remove-image" data-index="${index}">
          <img class="form__image" src="${addedFile.url}" alt="${addedFile.name}">
        </div>
      `;

      FILES_LIST_CONTAINER.insertAdjacentHTML('beforeEnd', content);
    });
  } else {
    console.log('empty');
    INPUT_FILE.value = "";
  }
};

const fileUpload = () => {
  if (FILES_LIST_CONTAINER) {
    multipleEvents(INPUT_FILE, 'click dragstart dragover', () => {
      INPUT_CONTAINER.classList.add('active');
    });

    multipleEvents(INPUT_FILE, 'dragleave dragend drop change blur', () => {
      INPUT_CONTAINER.classList.remove('active');
    });

    INPUT_FILE.addEventListener('change', () => {
      const files = [...INPUT_FILE.files];
      console.log("changed");
      files.forEach(file => {
        const fileURL = URL.createObjectURL(file);
        const fileName = file.name;
        if (!file.type.match("image/")) {
          alert(file.name + " is not an image");
          console.log(file.type);
        } else {
          const uploadedFiles = {
            name: fileName,
            url: fileURL };


          FILE_LIST.push(uploadedFiles);
        }
      });

      console.log(FILE_LIST); //final list of uploaded files
      previewImages();
      UPLOADED_FILES = document.querySelectorAll(".js-remove-image");
      removeFile();
    });
  }
};

const removeFile = () => {
  UPLOADED_FILES = document.querySelectorAll(".js-remove-image");

  if (UPLOADED_FILES) {
    UPLOADED_FILES.forEach(image => {
      image.addEventListener('click', function () {
        const fileIndex = this.getAttribute('data-index');

        FILE_LIST.splice(fileIndex, 1);
        previewImages();
        removeFile();
      });
    });
  } else {
    [...INPUT_FILE.files] = [];
  }
};

fileUpload();
removeFile();
</script>

@endsection

