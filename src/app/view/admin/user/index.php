<p>

</p>


<div class="container mt-5 ">
    <div class="d-flex justify-content-end">
        <a class="btn btn-warning link-dark text-uppercase fw-light" href="?p=admin.user.add">Ajouter un utilisateur</a>
    </div>
    <table class="table">
        <thead>
            <td>id</td>
            <td>Email</td>
            <td>Rôle</td>
            <td>Inscris le:</td>
            <td>Action</td>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user->id; ?></td>
                    <td><?= $user->email; ?></td>
                    <td><?= $user->role_name; ?></td>
                    <td><?= $user->creation_date; ?></td>
                    <td>
                        <a class="btn btn-outline-warning" href="?p=admin.user.edit&id=<?= $user->id; ?>">Éditer</a>
                        <form class="d-inline" action="?p=admin.user.delete" method="post">
                            <input type="hidden" name="id" value="<?= $user->id; ?>">
                            <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>