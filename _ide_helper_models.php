<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Admin
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $photo
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\AdminFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin withoutTrashed()
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\City
 *
 * @property int $id
 * @property string $name
 * @property int|null $parent_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, City> $cities
 * @property-read int|null $cities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $companies
 * @property-read int|null $companies_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LandOffer> $landOffers
 * @property-read int|null $land_offers_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Marketer> $marketers
 * @property-read int|null $marketers_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Neighbourhood> $neighbourhoods
 * @property-read int|null $neighbourhoods_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Office> $offices
 * @property-read int|null $offices_count
 * @property-read City|null $parentCity
 * @method static \Database\Factories\CityFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|City withoutTrashed()
 */
	class City extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Company
 *
 * @property int $id
 * @property int $user_id
 * @property int $license_number
 * @property int $advertiser_number
 * @property int $commercial_registration_number
 * @property string|null $logo
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\City> $cities
 * @property-read int|null $cities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Neighbourhood> $neighbourhoods
 * @property-read int|null $neighbourhoods_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\CompanyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAdvertiserNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCommercialRegistrationNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLicenseNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Company withoutTrashed()
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LandOffer
 *
 * @property int $id
 * @property int $user_id
 * @property int $city_id
 * @property int $neighbourhood_id
 * @property int|null $accepted_by
 * @property int $land_number
 * @property string $street_name
 * @property string $direction
 * @property string $commercial_or_housing
 * @property int|null $is_commercial
 * @property int $schema_number
 * @property int $streets_count
 * @property string $street_width
 * @property string $street_height
 * @property string $dept
 * @property string $space
 * @property int $instrument_number
 * @property string|null $image
 * @property string $operation_type
 * @property string $type2
 * @property string|null $type3
 * @property string $adjective
 * @property string|null $rent_period
 * @property string|null $contact_info
 * @property int $price
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\City $city
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LandType> $landTypes
 * @property-read int|null $land_types_count
 * @property-read \App\Models\Neighbourhood $neighbourhood
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\LandOfferFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer query()
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereAcceptedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereAdjective($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereCommercialOrHousing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereContactInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereDept($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereDirection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereInstrumentNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereIsCommercial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereLandNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereNeighbourhoodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereOperationType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereRentPeriod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereSchemaNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereSpace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereStreetHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereStreetName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereStreetWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereStreetsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereType2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereType3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|LandOffer withoutTrashed()
 */
	class LandOffer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LandType
 *
 * @property int $id
 * @property string $name
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LandOffer> $landOffers
 * @property-read int|null $land_offers_count
 * @method static \Database\Factories\LandTypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|LandType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LandType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LandType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|LandType query()
 * @method static \Illuminate\Database\Eloquent\Builder|LandType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandType whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandType withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|LandType withoutTrashed()
 */
	class LandType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Landlord
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $birthdate
 * @property string|null $photo
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\LandlordFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Landlord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Landlord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Landlord onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Landlord query()
 * @method static \Illuminate\Database\Eloquent\Builder|Landlord whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Landlord whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Landlord whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Landlord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Landlord wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Landlord whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Landlord whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Landlord withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Landlord withoutTrashed()
 */
	class Landlord extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Marketer
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $birthdate
 * @property int $license_number
 * @property int $advertiser_number
 * @property string|null $photo
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\City> $cities
 * @property-read int|null $cities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Neighbourhood> $neighbourhoods
 * @property-read int|null $neighbourhoods_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\MarketerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Marketer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Marketer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Marketer onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Marketer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Marketer whereAdvertiserNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marketer whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marketer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marketer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marketer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marketer whereLicenseNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marketer wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marketer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marketer whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marketer withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Marketer withoutTrashed()
 */
	class Marketer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Neighbourhood
 *
 * @property int $id
 * @property string $name
 * @property int $city_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\City $city
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $companies
 * @property-read int|null $companies_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LandOffer> $landOffers
 * @property-read int|null $land_offers_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Marketer> $marketers
 * @property-read int|null $marketers_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Office> $offices
 * @property-read int|null $offices_count
 * @method static \Database\Factories\NeighbourhoodFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Neighbourhood newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Neighbourhood newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Neighbourhood onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Neighbourhood query()
 * @method static \Illuminate\Database\Eloquent\Builder|Neighbourhood whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Neighbourhood whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Neighbourhood whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Neighbourhood whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Neighbourhood whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Neighbourhood whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Neighbourhood whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Neighbourhood withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Neighbourhood withoutTrashed()
 */
	class Neighbourhood extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Office
 *
 * @property int $id
 * @property int $license_number
 * @property int $advertiser_number
 * @property int $user_id
 * @property int $commercial_registration_number
 * @property string|null $logo
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\City> $cities
 * @property-read int|null $cities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Neighbourhood> $neighbourhoods
 * @property-read int|null $neighbourhoods_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\OfficeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Office newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Office newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Office onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Office query()
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereAdvertiserNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereCommercialRegistrationNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereLicenseNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Office withoutTrashed()
 */
	class Office extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ServiceProvider
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $birthdate
 * @property string|null $photo
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\ServiceProviderFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProvider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProvider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProvider onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProvider query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProvider whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProvider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProvider whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProvider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProvider wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProvider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProvider whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProvider withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProvider withoutTrashed()
 */
	class ServiceProvider extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string|null $phone
 * @property string|null $email
 * @property int $is_active
 * @property string|null $pin
 * @property string|null $phone_verified_at
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Admin|null $admin
 * @property-read \App\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LandOffer> $landOffers
 * @property-read int|null $land_offers_count
 * @property-read \App\Models\Landlord|null $landlord
 * @property-read \App\Models\Marketer|null $marketer
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Cmgmyr\Messenger\Models\Message> $messages
 * @property-read int|null $messages_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Office|null $office
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Cmgmyr\Messenger\Models\Participant> $participants
 * @property-read int|null $participants_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \App\Models\ServiceProvider|null $serviceProvider
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Cmgmyr\Messenger\Models\Thread> $threads
 * @property-read int|null $threads_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

