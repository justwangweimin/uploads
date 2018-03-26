import React from 'react';
import {Modal,Icon} from 'antd';
import {
  Link
} from 'react-router-dom';

const Modal4Moremenu = ({visible, cancel}) => (
  <Modal
    visible={visible}
    title="更多"
    onCancel={cancel}
    footer={null}
    style={styles.modal}
  >
    <Link to='/parttime' onClick={cancel} style={styles.link}>找兼职<Icon type='contacts' /></Link>
    <Link to='/normal' onClick={cancel} style={styles.link}>普工专区<Icon type='idcard' /></Link>
    <Link to='/shop' onClick={cancel} style={styles.link}>店铺招聘<Icon type='shop' /></Link>
    <Link to='/near' onClick={cancel} style={styles.link}>附近职位<Icon type='fork' /></Link>
    <Link to='/company' onClick={cancel} style={styles.link}>找企业<Icon type='bank' /></Link>
    <Link to='/jobfair' onClick={cancel} style={styles.link}>招聘会<Icon type='flag' /></Link>
    <Link to='/market' onClick={cancel} style={styles.link}>商城<Icon type='solution' /></Link>
    <Link to='/qa' onClick={cancel} style={styles.link}>互动问答<Icon type='phone' /></Link>
    <Link to='/suggest' onClick={cancel} style={styles.link}>意见反馈<Icon type='star' /></Link>
    <Link to='/topic' onClick={cancel} style={styles.link}>专题招聘<Icon type='tablet' /></Link>
    <Link to='/news' onClick={cancel} style={styles.link}>周边资讯<Icon type='notification' /></Link>
</Modal>
);
export default Modal4Moremenu;
const styles = {
  modal: {
    position: 'fixed',
    width: '80%',
    bottom: '40px',
    left:'0',
    right:'0',
    height:'250px',
    justifyContent: 'space-around',
    alignContent:'center',
    display: "flex",
    flexDirection:"row",
    padding: '0px 0px',
    top:'auto',
  },
  // link:{flexGrow: 1,flexShrink: 1,height:'36px',display:'inline', lineHeight:'34px',fontSize: 12,  background: "#f8f8f8", width: '25%',border:'1px solid #cfd0d0',textAlign:'center'},
  link:{height:'36px',display:'block',float:'left', lineHeight:'34px',fontSize: 12,color:'#999',  background: "#f8f8f8", marginLeft:'5px', width: '30%',border:'1px solid #cfd0d0',textAlign:'center'},
}