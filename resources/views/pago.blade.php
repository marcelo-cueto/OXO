@extends('layouts.plantilla')
@section('titulo')
  success
@endsection

@section('principal')
  <div class="container">
        <div class="row">
          <div class="splilist">
            <form action="" method="post" id="pay" name="pay" >
                <fieldset>
                    <ul>
                        <li>
                            <label for="email">Email</label>
                            <input id="email" name="email" value="test_user_19653727@testuser.com" type="email" placeholder="your email"/>
                        </li>
                        <li>
                            <label for="cardNumber">Credit card number:</label>
                            <input type="text" id="cardNumber" data-checkout="cardNumber" placeholder="4509 9535 6623 3704" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
                        </li>
                        <li>
                            <label for="securityCode">Security code:</label>
                            <input type="text" id="securityCode" data-checkout="securityCode" placeholder="123" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
                        </li>
                        <li>
                            <label for="cardExpirationMonth">Expiration month:</label>
                            <input type="text" id="cardExpirationMonth" data-checkout="cardExpirationMonth" placeholder="12" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
                        </li>
                        <li>
                            <label for="cardExpirationYear">Expiration year:</label>
                            <input type="text" id="cardExpirationYear" data-checkout="cardExpirationYear" placeholder="2015" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
                        </li>
                        <li>
                            <label for="cardholderName">Card holder name:</label>
                            <input type="text" id="cardholderName" data-checkout="cardholderName" placeholder="APRO" />
                        </li>
                        <li>
                            <label for="docType">Document type:</label>
                            <select id="docType" data-checkout="docType"></select>
                        </li>
                        <li>
                            <label for="docNumber">Document number:</label>
                            <input type="text" id="docNumber" data-checkout="docNumber" placeholder="12345678" />
                        </li>
                    </ul>
                    <input type="hidden" name="paymentMethodId" />
                    <input type="submit" value="Pay!" />
                </fieldset>
            </form>
          </div>
        </div>
  </div>
@endsection
