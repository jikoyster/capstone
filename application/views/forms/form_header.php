<div class="panel" align="center">
    <div class="panel-body">
        <table width="100%">
            <tr>
                <td><label>Title:</label></td>
                <td><input type="text" class="form-control" name="title" placeholder="Name of the Program/Project/Activity" ></td>
                <td><label>&nbsp; Date & Time Created:</label></td>
                <?php $datetime = date('F d ,Y | h:i A '); 
                      $new_date = date( "Y-m-d H:i:s");
                ?>
                <td>
                    <input type="text" name="datetime_created" <?php echo "value='".$datetime."' " ?> class="form-control" readonly>
                    <input type="hidden" name="datetime_format" <?php echo "value='".$new_date."' " ?>>
                </td>
            </tr>
            <tr>
                <td><label>School:</label></td>
                <td>
                  <select class="form-control" name="school" >
                  <option>-- Select your School --</option>
                    <option value="School of Architecture, Fine Arts and Design">School of Architecture, Fine Arts and Design</option>
                    <option value="School of Arts and Sciences">School of Arts and Sciences</option>
                    <option value="School of Education">School of Education</option>
                    <option value="School of Health Care Profession">School of Health Care Profession</option>
                    <option value="School of Law and Governance">School of Law and Governance</option>
                    <option value="School of Business and Economics">School of Business and Economics</option>
                    <option value="School of Engineering">School of Engineering</option>
                  </select>
                </td>
                <td><label>&nbsp Department:</label></td>
                <td>
                  <select class="form-control" name="department" >
                    <option>-- Select your Department --</option>
                    <option disabled>-- School of Architecture, Fine Arts and Design --</option>
                      <option value="Architecture">Architecture</option>
                      <option value="Fine Arts">Fine Arts</option>
                    <option disabled>-- School of Arts and Sciences --</option>
                      <option value="Languages and Literature">Languages and Literature</option>
                      <option value="Philosophy and Religious Studies">Philosophy and Religious Studies</option>
                      <option value="Psychology">Psychology</option>
                      <option value="Anthropology, Sociology and History">Anthropology, Sociology and History</option>
                      <option value="Biology">Biology</option>
                      <option value="Chemistry">Chemistry</option>
                      <option value="Computer and Information Sciences">Computer and Information Sciences</option>
                      <option value="Mathematics">Mathematics</option>
                      <option value="Phsyics">Phsyics</option>
                    <option disabled>-- School of Education --</option>
                      <option value="Teacher Education">Teacher Education</option>
                      <option value="Science and Mathematics">Science and Mathematics</option>
                      <option value="Physical Education">Physical Education</option>
                    <option disabled>-- School of Health Care Profession -</option>
                      <option value="Nursing">Nursing</option>
                      <option value="Pharmacy">Pharmacy</option>
                      <option value="Nutrition and Dietics">Nutrition and Dietics</option>
                    <option disabled>-- School of Law and Governance --</option>
                      <option value="Law">Law</option>
                      <option value="Political Science">Political Science</option>
                    <option disabled>-- School of Business and Economics --</option>
                      <option value="Accountancy">Accountancy</option>
                      <option value="Business Administration">Business Administration</option>
                      <option value="Economics">Economics</option>
                      <option value="Hospitality Management">Hospitality Management</option>
                    <option disabled>-- School of Engineering --</option>
                      <option value="Chemical Engineering">Chemical Engineering</option>
                      <option value="Civil Engineering">Civil Engineering</option>
                      <option value="Computer Engineering">Computer Engineering</option>
                      <option value="Electronics and Communications Engineering">Electronics and Communications Engineering</option>
                      <option value="Electrical Engineering">Electrical Engineering</option>
                      <option value="Industrial Engineering">Industrial Engineering</option>
                      <option value="Mechanical Engineering">Mechanical Engineering</option>
                  </select>
                </td>
            </tr>
            <tr>
                <td><label>Inclusive Date:</label> <em>[ from ]</em></td>
                <!-- <td><input type="text" name="act_duration1" placeholder="Date Start of Activity (mm/dd/yyyy)" class="form-control datepicker" ></td> -->
                <td><input type="text" name="act_duration1" placeholder="Date Start of Activity (mm/dd/yyyy)" class="form-control datepicker" ></td>
                <td class="text-center"><em>[ to ]</em></td>
                <td><input type="text" name="act_duration2" placeholder="Date End of Activity (mm/dd/yyyy)" class="form-control datepicker" ></td>
            </tr>
            <tr>
                <td><label>Venue:</label></td>
                <td colspan="3"><input type="text" name="venue" class="form-control" placeholder="Where will the activity take place?" ></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</div>