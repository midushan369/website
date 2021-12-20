<?php if(count($errors) > 0 ): ?>
                <Div>
                    <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </Div>
            <?php endif; ?>