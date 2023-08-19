<?php
$imagePosition = "left";
foreach ($projects as $project) :
    if ($imagePosition == "left") :
        $imagePosition = "right";
?>
        <div class="project project-left uianimated delay-200">
            <div class="project-photos">
                <img src="<?= image($project->image, 1200, 750); ?>" alt="<?= $project->category()->category . " - " . $project->title ?>" title="<?= $project->category()->category . " - " . $project->title ?>" width="100%">
            </div>
            <div class="project-description">
                <h2><?= $project->category()->category . " - " . $project->title ?></h2>
                <p><?= $project->description ?></p>

                <h3>Tecnologias Utilizadas:</h3>
                <ul>
                    <?php foreach (str_to_array($project->tags, ";") as $tag) : ?>
                        <li><?= $tag ?></li>
                    <?php endforeach; ?>
                </ul>

                <div class="actions-button">
                    <?php if ($project->link_demo) : ?>
                        <a href="<?= $project->link_demo ?>" target="_blank" class="button"><i class="fa-solid fa-right-to-bracket text-blue-light"></i> Visualizar</a>
                    <?php endif; ?>
                    <?php if ($project->link_github) : ?>
                        <a href="<?= $project->link_github ?>" target="_blank" class="button"> <i class="fa-brands fa-github text-blue-light"></i> Github</a>
                    <?php endif; ?>
                    <?php if ($project->link_youtube) : ?>
                        <a href="<?= $project->link_youtube ?>" target="_blank" class="button"> <i class="fa-brands fa-youtube text-blue-light"></i> Youtube</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php else :
        $imagePosition = "left"
    ?>
        <div class="project project-right uianimated delay-200">
            <div class="project-description">
                <h2><?= $project->category()->category . " - " . $project->title ?></h2>
                <p><?= $project->description ?></p>

                <h3>Tecnologias Utilizadas:</h3>
                <ul>
                    <?php foreach (str_to_array($project->tags, ";") as $tag) : ?>
                        <li><?= $tag ?></li>
                    <?php endforeach; ?>
                </ul>

                <div class="actions-button">
                    <?php if ($project->link_demo) : ?>
                        <a href="<?= $project->link_demo ?>" target="_blank" class="button"><i class="fa-solid fa-right-to-bracket text-blue-light"></i> Visualizar</a>
                    <?php endif; ?>
                    <?php if ($project->link_github) : ?>
                        <a href="<?= $project->link_github ?>" target="_blank" class="button"> <i class="fa-brands fa-github text-blue-light"></i> Github</a>
                    <?php endif; ?>
                    <?php if ($project->link_youtube) : ?>
                        <a href="<?= $project->link_youtube ?>" target="_blank" class="button"> <i class="fa-brands fa-youtube text-blue-light"></i> Youtube</a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="project-photos">
                <img src="<?= image($project->image, 1200, 750); ?>" alt="<?= $project->category()->category . " - " . $project->title ?>" title="<?= $project->category()->category . " - " . $project->title ?>" width="100%">
            </div>
        </div>
<?php
    endif;
endforeach; ?>