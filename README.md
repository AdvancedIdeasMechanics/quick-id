# quick-id
Generate a quick alpha numeric id

### Composer ###

`composer install advancedideasmechanics/quick-id`

#### Stand-Alone ####

`require('./vendor/autoload.php');`

#### Call ####

`use Advancedideasmechanics\Quickid\QuickidService;`

`$QuickidService = new QuickidService();`
`$quickId = $QuickidService->getId(3);`

This will return an alphnumeric id. Minimum of three characters.