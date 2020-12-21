import React, { useState } from 'react';

import './login';

export default function SignIn() {
  return (
    <div className="joinOuterContainer">
      <div className="joinInnerContainer">
        <div>
          <input placeholder="Email" className="joinInput" type="text" />
        </div>
        <div>
          <input placeholder="Password" className="joinInput mt-20" type="text" />
        </div>
          <button className={'button mt-20'} >Login</button>
 
      </div>
    </div>
  );
}
