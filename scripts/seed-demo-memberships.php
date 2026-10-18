<?php
/** APSS-only synthetic membership fixture. Execute using cv php:eval. */
use Civi\Api4\Contact;
use Civi\Api4\Membership;
use Civi\Api4\MembershipType;
$expected=[3=>['Alex','Tan',2,2],4=>['Sarah','Lim',1,2],5=>['Daniel','Wong',2,4],6=>['Priya','Nair',1,5]];
$types=MembershipType::get(FALSE)->addSelect('id','name')->execute();
$names=[];foreach($types as $row){$names[(int)$row['id']]=$row['name'];}
if(($names[1]??'')!=='Associate Member'||($names[2]??'')!=='Professional Member')throw new RuntimeException('Membership types mismatch. STOP.');
foreach($expected as $id=>[$first,$last,$type,$status]){
  $c=Contact::get(FALSE)->addWhere('id','=',$id)->execute()->first();
  if(!$c||$c['first_name']!==$first||$c['last_name']!==$last||$c['source']!=='APSS One synthetic demo')throw new RuntimeException("STOP: Contact $id does not match synthetic fixture.");
}
$memberships=Membership::get(FALSE)->addWhere('contact_id','IN',array_keys($expected))->execute();
foreach($memberships as $m){
  $id=(int)$m['contact_id'];
  if((int)$m['membership_type_id']!==$expected[$id][2])throw new RuntimeException("STOP: unexpected membership type for $id");
}
foreach($expected as $id=>[$first,$last,$type,$status]){
  $existing=Membership::get(FALSE)->addWhere('contact_id','=',$id)->execute();
  if(count($existing)){echo "EXISTS $id\n";continue;}
  $dateStart=$status===4?'2024-01-01':'2026-01-01';
  $dateEnd=$status===4?'2025-01-01':'2027-01-01';
  $created=Membership::create(FALSE)->setValues([
    'contact_id'=>$id,'membership_type_id'=>$type,
    'join_date'=>$dateStart,'start_date'=>$dateStart,'end_date'=>$dateEnd,
    'status_id'=>$status,'source'=>'APSS One synthetic demo','is_override'=>1
  ])->execute();
  echo "CREATED membership for $id (".($created->first()['id']??'?').")\n";
}
