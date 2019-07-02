<?php

   $JsonGuerrilla = '[
  {
    "name": "Usuario 1",
    "email": "string",
    "faction": "string",
    "timestamp": 0,
    "rank": 0,
    "resources": {
      "oil": 100,
      "money": 300,
      "people": 250
    },
    "buildings": {
      "bunker": 0
    },
    "army": {
      "assault": 0,
      "engineer": 0,
      "tank": 0
    }
  }
]';
    $guerrillaArray = json_decode($JsonGuerrilla,true);

?>

<section id="login" class="login-block">
    <div class="container">
        <div class="row">
            <div class="col login-sec">
                <h2 class="text-center"><?php echo $guerrillaArray[0]["name"]; ?></h2>
                <div class="container">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label id="oil" name="Oil" >Oil</label>

                    </div>
                    <div class="form-group">
                        <label id="money" name="Oil" >Money</label>
                    </div>
                    <div class="form-group">
                        <label id="people" name="people" >People</label>
                    </div>
                    	

                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label id="oil" name="Oil" ><?php echo $guerrillaArray[0]["resources"]["oil"]; ?></label>
                    </div>
                    <div class="form-group">
                        <label id="money" name="Oil" ><?php echo $guerrillaArray[0]["resources"]["money"]; ?></label>
                    </div>
                    <div class="form-group">
                        <label id="people" name="people" ><?php echo $guerrillaArray[0]["resources"]["people"]; ?></label>
                    </div>
                    	

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>