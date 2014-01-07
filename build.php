
<!-- Header -->
<?php include "header.php" ?>


<section>
    <div class="row">
        <div class="large-12 columns">
            <br/><br/>
            <h3>Create a Project</h3>
            <p>* Denotes Required Field</p>
            <br/><br/>
        </div>
    </div>

    <!-- SECTION 1 - TITLE -->
    <div class="row">
        <div class="large-12 columns">
            <span class="number left">1</span>
            <h3>Project Title *</h3>
        </div>
        <div class="large-1 columns"></div>
        <div class="large-10 large-centered columns">
            <div class="row">
                <div class="large-8 columns">
                    <input type="text" placeholder="HoatziNest - Ideas and Team building platform for web..."/>
                </div>
                <div class="large-4 columns">
                    <p>Example: Real-time Code Editor</p>
                    <p>Example: Mobile App Development</p>
                </div>
            </div>
        </div>
        <div class="large-1 columns"></div>
    </div>


    <!-- SECTION 2 - DETAILS-->
    <div class="row">
        <div class="large-12 columns">
            <span class="number left">2</span>
            <h3>Project Details</h3>
        </div>
        <div class="large-1 columns"></div>
        <div class="large-10 large-centered columns textbox">
            <div class="row">
                <div class="large-8 columns left">
                    <span>This project team will need members with expertise in the following areas:</span>
                    <p>Choose one or more*</p>
                </div>

            </div>

            <div class="row">
                <div class="large-8 columns">
                    <div class="row">
                        <div class="large-4 columns panel panelLightGray">
                            <ul>
                                <li><input id="developers" type="checkbox"/><label for="developers">Developers</label></li>
                                <li><input id="Engineers" type="checkbox"/><label for="Engineers">Engineers</label></li>
                                <li><input id="Managers" type="checkbox"/><label for="Managers">Project Managers</label></li>
                            </ul>
                        </div>
                        <div class="large-4 columns panel panelGray">
                            <ul>
                                <li><input id="Designers" type="checkbox"/><label for="Designers">Designers</label></li>
                                <li><input id="Directors" type="checkbox"/><label for="Directors">Art Directors</label></li>
                                <li><input id="Artists" type="checkbox"/><label for="Artists">Artists</label></li>
                            </ul>
                        </div>
                        <div class="large-4 columns panel panelDarkGray">
                            <ul>
                                <li><input id="Marketers" type="checkbox"/><label for="Marketers">Marketers</label></li>
                                <li><input id="Animators" type="checkbox"/><label for="Animators">Video/Animators</label></li>
                                <li><input id="Writers" type="checkbox"/><label for="Writers">Writers</label></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="creating">What are you creating?</label>
                    <textarea id="creating"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="why">Why are you creating this?</label>
                    <textarea id="why"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="how">How can others help you?</label>
                    <textarea id="how"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="goals">What are the main goals you wish to accomplish with this project?</label>
                    <textarea id="goals"></textarea>
                </div>
                <div class="large-4 columns">
                    <p>Example: Build an open source community</p>
                    <p>Example: Launch web and mobile app together</p>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="github">GitHub Repository (optional)</label>
                    <input id="github" type="text" placeholder="Project github url"/>
                </div>
            </div>


        </div>
        <div class="large-1 columns"></div>
    </div>


    <!-- SECTION 3 - IMAGES -->
    <div class="row">
        <div class="large-12 columns">
            <span class="number left">3</span>
            <h3>Project Images</h3>
        </div>
        <div class="large-1 columns"></div>
        <div class="large-10 large-centered columns">
            <div class="row">
                <div class="large-8 columns">
                    <form action="upload_file.php" method="post"
                          enctype="multipart/form-data">
                        <label for="file">Add Images...</label>
                        <input type="file" name="file" id="file"><br>
                        <input class="button secondary radius wide right" type="submit" name="submit" value="Submit">
                    </form>
                    <br/>

                </div>
            </div>
        </div>
        <div class="large-1 columns"></div>
    </div>
    <br/><br/>

</section>


<!-- ======== FOOTER ======== -->
<?php include "footer.php" ?>
<!-- === Mid Content === -->