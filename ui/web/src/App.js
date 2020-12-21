import './App.css';

import login from './components/login/login';

import { BrowserRouter as Router, Route } from "react-router-dom";


function App() {
  return (
  <Router>
    <Route path="/" exact component={login} />
  </Router>
  );
}

export default App;
