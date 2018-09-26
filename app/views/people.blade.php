<?php require 'partials/header.blade.php' ?>


<v-card>
    <v-toolbar color="cyan" dark>
        <v-toolbar-side-icon></v-toolbar-side-icon>

        <v-toolbar-title>Persones</v-toolbar-title>

        <v-spacer></v-spacer>

        <v-btn icon>
            <v-icon>search</v-icon>
        </v-btn>
    </v-toolbar>

    <v-list two-line>
        <v-subheader>
            Persones
        </v-subheader>

        <v-divider></v-divider>

        <?php foreach ($people as $person) : ?>

        <v-list-tile>

            <v-list-tile-avatar>
                <img src="https://2static.fjcdn.com/pictures/Derp+cat_9720f6_6005436.jpg">
            </v-list-tile-avatar>

            <v-list-tile-content>
                <v-list-tile-title>
                    <?= $person->name; ?>
                </v-list-tile-title>
                    <?= $person->dni; ?>
                <v-list-tile-title>
                    <?= $person->height; ?>
                </v-list-tile-title>
            </v-list-tile-content>
        </v-list-tile>
        <?php endforeach;?>

    </v-list>
</v-card>

<?php require 'partials/footer.blade.php' ?>
