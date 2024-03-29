<div class="column">
    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
        <thead>
            <tr>
                <th>ID</th>
                <th>Contact Name</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>City</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pals as $pal): ?>
                <tr>
                    <td><?= $pal->id ?></td>
                    <td><?= $pal->contact_name ?></td>
                    <td><?= $pal->contact_number ?></td>
                    <td><?= $pal->email_address ?></td>
                    <td><?= $pal->name ?></td>
                    <td style="text-align: center">
                        <a href="<?=site_url('contacts/edit/'.$pal->id)?>"><i class="fas fa-edit"></i></a>
                        | <a href="<?=site_url('contacts/delete/'.$pal->id)?>"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>