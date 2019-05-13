import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import Header from './Header'

class Login extends Component {
  render () {
    return (
      <BrowserRouter>
        <div>
          <Header />
        </div>
      </BrowserRouter>
    )
  }
}

ReactDOM.render(<Login />, document.getElementById('app'))