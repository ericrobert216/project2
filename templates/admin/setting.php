<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/19/17
 * Time: 1:56 AM
 */
?>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


<form action="" method="post">
    First name:<br>
    <input type="text" name="firstname" value="Mickey">
    <br>
    Last name:<br>
    <input type="text" name="lastname" value="Mouse">
    <br><br>

    <input type="submit" value="Submit">
    <?php wp_nonce_field( 'save_setting', 'zoo_ln_nonce_setting' ); ?>
</form>

<script>

    $( document ).ready(function() {
        $('.filter-list').find('.filter-item').draggable({
            connectToSortable: '.apply-filer',
            handle: '.card-body .card-title',
            distance: 2,
            helper: 'clone',
            zIndex: 100,
//            containment: '#wpwrap',
            refreshPositions: true,
            start: function(event, ui){

                //console.log(ui);
                $(ui.helper).removeAttr( 'style' );

            }
//            start: function( event, ui ) {
////                var chooser = $(this).find('.widgets-chooser');
////
////                ui.helper.find('div.widget-description').hide();
////                the_id = this.id;
////
////                if ( chooser.length ) {
////                    // Hide the chooser and move it out of the widget
////                    $( '#wpbody-content' ).append( chooser.hide() );
////                    // Delete the cloned chooser from the drag helper
////                    ui.helper.find('.widgets-chooser').remove();
////                    self.clearWidgetSelection();
////                }
//            },
//            stop: function() {
////                if ( rem ) {
////                    $(rem).hide();
////                }
////
////                rem = '';
//            }
        });

        $( ".apply-filer" ).droppable({
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "p" )
                    .html( "Dropped!" );
            }
        });

        $( ".apply-filer" ).sortable();
        $( ".apply-filer" ).disableSelection();
    });


</script>


<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body filter-list">
                    <h4 class="card-title">Filter Options</h4>
                    <p class="card-text">Drag and drop.</p>
                    <div class="card filter-item">
                        <div class="card-body">
                            <h8 class="card-title">+ Addable Item</h8>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card w-100 mw-100">
                <div class="card-body apply-filer">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Drag item here to apply</p>
                    <div class="card filter-item">
                        <div class="card-body">
                            <h8 class="card-title">+ Addable Item 1</h8>
                        </div>
                    </div>
                    <div class="card filter-item">
                        <div class="card-body">
                            <h8 class="card-title">+ Addable Item 2</h8>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>