        <div class = "row">
          <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form action="rosterUpdate.php" method = "post">
               <div class = "form-group">
                <label for = "oldFN">Original First Name</label>
                <input type="text" class="form-control" name="oldFN" maxlength="50" placeholder="Original First Name" value= "<?=$varOrigFirstName;?>">
                <br>
                <label for = "oldLN">Original Last Name</label>
                <input type="text" class="form-control" name="oldLN" maxlength="50" placeholder="Original Last Name" value= "<?=$varOrigLastName;?>">
               </div>
              <div class="form-group">
                <label for="updFN">First Name</label>
                <input type="text" class="form-control" name="updFN" maxlength="50" placeholder="First Name" value= "<?=$varUpdFirstName;?>">
                <br>
                <label for="updLN">Last Name</label>
                <input type="text" class="form-control" name="updLN" maxlength="50" placeholder="Last Name" value= "<?=$varUpdLastName;?>">
                <br>
                <label for="updFN">Nick Name</label>
                <input type="text" class="form-control" name="updNN" maxlength="50" placeholder="Nick Name" value= "<?=$varUpdNickName;?>">
                <br>
                <label for="updPosition">Position</label>
                <input type="text" class="form-control" name="updPosition" maxlength="50" placeholder="Position" value= "<?=$varUpdPositon;?>">
                <br>
                <label for="updEB">Exec Board Position</label>
                <input type="text" class="form-control" name="updEB" maxlength="50" placeholder="E-Board" value= "<?=$varUpdExecBoard;?>">
                <br>
                <label for="updGroup">Group</label>
                <select class="form-control" name = "updGroup" value = "<?=$varUpdGroup;?>">
                  <option value = "Select" <? if($varUpdGroup=="Select") echo (" selected =\"selected\"");?>>Select</option>
                  <option value = "Forward" <? if($varUpdGroup=="Forward") echo (" selected =\"selected\"");?>>Forward</option>
                  <option value = "Back" <? if($varUpdGroup=="Back") echo (" selected =\"selected\"");?>>Back</option>
                  <option value = "Forward Back" <? if($varUpdGroup=="Forward Back") echo (" selected =\"selected\"");?>>Forward Back</option>
                  <option value = "Alumni" <? if($varUpdGroup=="Alumni") echo (" selected =\"selected\"");?>>Alumni</option>
                  <option value = "Coach" <? if($varUpdGroup=="Coach") echo (" selected =\"selected\"");?>>Coach</option>
                </select>
                <br>
         
                <button type="submit" class="btn btn-default" name = "formSubmit" value = "Submit">Submit Form</button>
              </div>
            </form>
          </div>
        </div>
    