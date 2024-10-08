<?php $titles = explode("/", $title);?>


<div class="page__codes codes">
    <h2 class="page__title"><?php echo ucfirst($titles[0])?> <span>/ <?php echo $titles[1]?></span></h2>

    <div class="page__subtitle">Create new codes</div>
    <form class="codes__form create" method="POST" action="/codes/create">
        <label class="codes__file">
            <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
            <input class="create__file" name="file" type="file" id="file" aria-label="File browser example"
            accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
            <span class="codes__file-custom create__file-suctom"></span>
        </label>
        <label class="codes__add">
            <?php 
            // echo($titles[1]);
            if($titles[1] === 'ketolight') {
                echo "<input name='add' id='add' type='text' placeholder='XXXXX-XXXXX-XXXX'>";
            } else {
                echo "<input name='add' id='add' type='text' placeholder='XXXX-XXXX-XXXX-XXXX'>";
            }
            ?>
            <span class="codes__add-custom"></span>
        </label>
        <button class="page__button create__button" type="submit">Create</button>
    </form>
    <br><br>

    <!-- Another -->

    <div class="page__subtitle">Delete old codes</div>
    <form class="codes__form delete" method="POST" action="/codes/delete">
        <label class="codes__file">
            <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
            <input class="delete__file" name="file" type="file" id="file" aria-label="File browser example"
            accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
            <span class="codes__file-custom delete__file-suctom"></span>
        </label>

        <button class="page__button delete__button" type="submit">Delete</button>
        <div class="page__button delete__button-all">Drop DB</div>
    </form>
    <!-- Another -->

    <br><br>
    <div class="page__subtitle">Active code list</div>
    <div class="codes__result result">
        <?php foreach($vars as $item) echo "<div class='result__item'>".$item['value']."</div>"; ?>    
    </div>

</div>


<?php if($titles[1] === 'ketolight') {
    echo "<script src='/public/js/ketolight.codes.min.js'></script>";
} else {
    echo "<script src='/public/js/codes.min.js'></script>";
} ?>
