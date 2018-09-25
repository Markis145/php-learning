<?php require 'partials/header.blade.php' ?>

<ul>
    <?php foreach ($tasks as $task) : ?>
    <li>
        <?php if ($task->completed == true): ?>
        <strike>
            <?php endif; ?>
            <?= $task->name; ?>
            <?php if ($task->completed == true): ?>
        </strike>
        <?php endif; ?>
    </li>
    <?php endforeach;?>
</ul>

<v-card>
    <v-toolbar color="cyan" dark>
        <v-toolbar-side-icon></v-toolbar-side-icon>

        <v-toolbar-title>Tasques</v-toolbar-title>

        <v-spacer></v-spacer>

        <v-btn icon>
            <v-icon>search</v-icon>
        </v-btn>
    </v-toolbar>

    <v-list two-line>
        <template v-for="(item, index) in items">
            <v-subheader
                    v-if="item.header"
                    :key="item.header"
            >
                {{ item.header }}
            </v-subheader>

            <v-divider
                    v-else-if="item.divider"
                    :inset="item.inset"
                    :key="index"
            ></v-divider>
            <?php foreach ($tasks as $task) : ?>
            <v-list-tile
                    v-else
                    :key="item.title"
                    avatar
                    @click=""
            >
                <v-list-tile-avatar>
                    <img :src="item.avatar">
                </v-list-tile-avatar>

                <v-list-tile-content>
                    <v-list-tile-title v-html="item.title"></v-list-tile-title>
                    <v-list-tile-sub-title v-html="item.subtitle"></v-list-tile-sub-title>
                </v-list-tile-content>
            </v-list-tile>
            <?php endforeach;?>
        </template>
    </v-list>
</v-card>

<?php require 'partials/footer.blade.php' ?>

