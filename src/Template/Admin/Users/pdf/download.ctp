<div>
    <h2>Health Goals</h2>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Attribute</th>
                    <th>Information</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($healthGoals)):?>
                    <?php foreach($healthGoals as $healthGoal => $value):?>
                        <tr>
                            <td>
                                <?php
                                    echo trim(ucwords(str_replace("_", " ", $healthGoal)));
                                ?>
                                </td>
                            <td>
                                <?php
                                    if($value == '1') {
                                        echo "<div class='label label-table label-info'>YES</div>";
                                    }
                                    else if($value == '0') {
                                        echo "<div class='label label-table label-danger'>NO</div>";
                                    }
                                    else {
                                        echo trim($value);
                                    }
                                ?>
                            </td>
                        </tr>
                    <?php endforeach;?>
                <?php endif;?>
            </tbody>
        </table>
    </div>
</div>
<div>
    <h2>About You</h2>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Attribute</th>
                    <th>Information</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($aboutYou)):?>
                    <?php foreach($aboutYou as $about => $value):?>
                        <tr>
                            <td>
                                <?php
                                    echo trim(ucwords(str_replace("_", " ", $about)));
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo trim($value);
                                ?>
                            </td>
                        </tr>
                    <?php endforeach;?>
                <?php endif;?>
            </tbody>
        </table>
    </div>
</div>

