<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Contestant
 *
 * @property int $id
 * @property int $user_id
 * @property int $position_id
 * @property int $votes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Contestant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contestant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contestant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contestant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contestant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contestant wherePositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contestant whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contestant whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contestant whereVotes($value)
 */
	class Contestant extends \Eloquent {}
}

namespace App{
/**
 * App\Poll
 *
 * @property int $id
 * @property string $title
 * @property string $session_title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Position[] $positions
 * @property-read int|null $positions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Poll newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Poll newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Poll query()
 * @method static \Illuminate\Database\Eloquent\Builder|Poll whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poll whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poll whereSessionTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poll whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poll whereUpdatedAt($value)
 */
	class Poll extends \Eloquent {}
}

namespace App{
/**
 * App\Position
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $poll_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Contestant[] $contestants
 * @property-read int|null $contestants_count
 * @method static \Illuminate\Database\Eloquent\Builder|Position newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Position newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Position query()
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position wherePollId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereUpdatedAt($value)
 */
	class Position extends \Eloquent {}
}

namespace App{
/**
 * App\Session
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Session newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session query()
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereUpdatedAt($value)
 */
	class Session extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

