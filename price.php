<!doctype HTML>
<html lang="fa">

<head>
    <title> استعلام قیمت</title>
    <?php include "components/php/head.php"; ?>
</head>

<body>
    <?php include "components/php/navigation.php";  ?>

    <div class="container price">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3">
                    <!-- <div class="form-group">
                        <div class="btn-group bootstrap-select">
                            <button type="button" class="btn dropdown-toggle bs-placeholder btn-default" data-toggle="dropdown" role="button" title="همه" aria-expanded="false"><span class="filter-option">همه</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
                            <div class="dropdown-menu open" role="combobox">
                                <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                    <li data-original-index="0"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">خودکار</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">ورق</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    <li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">مداد</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                </ul>
                            </div>
                            <select class="selectpicker form-control" multiple="" title="Choose one of the following..." tabindex="-98">
                                     <option>خودکار</option>
                                     <option>ورق</option>
                                     <option>مداد</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <span class="select-text">
                            انتخاب کالا -
                        </span>
                         <select class="selectpicker" name="" multiple title="همه" data-selected-text-format="count>1" data-size="6" data-width="100%" >
                             <option value="pen">خودکار</option>
                             <option value="2">خودکار</option>
                             <option value="3">خودکار</option>
                             <option value="4">خودکار</option>
                             <option value="">خودکار</option>
                             <option value="">خودکار</option>
                             <option value="">خودکار</option>
                             <option value="">خودکار</option>
                             <option value="">خودکار</option>
                             <option value="">خودکار</option>
                         </select>
                     </div>

                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-1">

                </div>
            </div>
            <div class="col-md-12">

            </div>
        </div>
    </div>

    <?php include "components/php/js_source.php"; ?>
</body>

</html>
