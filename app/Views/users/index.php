<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="directory-header shell">
    <div>
        <span class="eyebrow">Team access</span>
        <h1>User accounts</h1>
        <p>Roles, system access, shifts and activity for the team keeping every counter ready.</p>
    </div>
    <div class="record-count"><span>Directory total</span><strong><?= count($users) ?> staff profiles</strong></div>
</section>

<section class="shell directory-summary" aria-label="Staff account summary">
    <article><span>Active users</span><strong>5</strong><small>1 account currently inactive</small></article>
    <article><span>On today</span><strong>4</strong><small>Opening and midday shifts</small></article>
    <article><span>Access profiles</span><strong>5</strong><small>Permission groups in use</small></article>
    <article><span>Coverage</span><strong>9 AM–8 PM</strong><small>Full operating-day support</small></article>
</section>

<section class="shell directory-panel" data-directory>
    <div class="table-toolbar">
        <label class="search-field">
            <span class="sr-only">Search users</span>
            <span aria-hidden="true">⌕</span>
            <input type="search" placeholder="Search staff, username, role or access…" data-table-search autocomplete="off">
        </label>
        <p data-results-label>Showing all <?= count($users) ?> users</p>
    </div>

    <div class="table-scroll">
        <table>
            <thead>
                <tr>
                    <th scope="col">Staff member</th>
                    <th scope="col">Username</th>
                    <th scope="col">Role</th>
                    <th scope="col">System access</th>
                    <th scope="col">Shift</th>
                    <th scope="col">Last login</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr data-table-row>
                    <td data-label="Staff member">
                        <div class="identity-cell">
                            <span class="avatar staff"><?= esc(strtoupper(substr($user['full_name'], 0, 1))) ?></span>
                            <span><strong><?= esc($user['full_name']) ?></strong><small><?= esc($user['email']) ?></small></span>
                        </div>
                    </td>
                    <td data-label="Username"><span class="username">@<?= esc($user['username']) ?></span></td>
                    <td data-label="Role"><span class="role-tag"><?= esc($user['role']) ?></span></td>
                    <td data-label="System access"><span class="access-tag"><?= esc($user['access']) ?></span></td>
                    <td data-label="Shift"><?= esc($user['shift']) ?></td>
                    <td data-label="Last login"><span class="last-login"><?= esc($user['last_login']) ?></span></td>
                    <td data-label="Status"><span class="status-pill <?= strtolower($user['status']) ?>"><i aria-hidden="true"></i><?= esc($user['status']) ?></span></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="empty-state" data-empty-state hidden>
        <strong>No users found</strong>
        <p>Try another staff name, username, role or permission group.</p>
    </div>
</section>
<?= $this->endSection() ?>
