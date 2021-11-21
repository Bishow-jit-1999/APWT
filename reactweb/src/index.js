import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import Header from './components/Header';
import Hero from './components/Hero';
import Cilent from './components/Cilent';
import About from './components/About';
import Count from './components/Count';
import Service from './components/Service';
import CTA from './components/CTA';
import Testimonial from './components/Testimonial';
import reportWebVitals from './reportWebVitals';
import Portfolio from './components/Portfolio';
import Team from './components/Team';
import Price from './components/Price';
import FAQ from './components/FAQ';
import Contact from './components/Contact';
import Footer from './components/Footer';

ReactDOM.render(
  <React.StrictMode>
    <Header/>
    <Hero/>
    <Cilent/>
    <About/>
    <Count/>
    <Service/>
    <CTA/>
    <Testimonial/>
    <Portfolio/>
    <Team/>
    <Price/>
    <FAQ/>
    <Contact/>
    <Footer/>
  </React.StrictMode>,
  document.getElementById('root')
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
