using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Pms
{
    #region Students
    public class Students
    {
        #region Member Variables
        protected int _id;
        protected string _name;
        protected string _rollno;
        protected string _batch;
        protected string _division;
        protected string _shift;
        protected string _branch;
        protected string _year;
        protected string _email;
        protected string _contact;
        protected int _isGrouped;
        #endregion
        #region Constructors
        public Students() { }
        public Students(string name, string rollno, string batch, string division, string shift, string branch, string year, string email, string contact, int isGrouped)
        {
            this._name=name;
            this._rollno=rollno;
            this._batch=batch;
            this._division=division;
            this._shift=shift;
            this._branch=branch;
            this._year=year;
            this._email=email;
            this._contact=contact;
            this._isGrouped=isGrouped;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Rollno
        {
            get {return _rollno;}
            set {_rollno=value;}
        }
        public virtual string Batch
        {
            get {return _batch;}
            set {_batch=value;}
        }
        public virtual string Division
        {
            get {return _division;}
            set {_division=value;}
        }
        public virtual string Shift
        {
            get {return _shift;}
            set {_shift=value;}
        }
        public virtual string Branch
        {
            get {return _branch;}
            set {_branch=value;}
        }
        public virtual string Year
        {
            get {return _year;}
            set {_year=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Contact
        {
            get {return _contact;}
            set {_contact=value;}
        }
        public virtual int IsGrouped
        {
            get {return _isGrouped;}
            set {_isGrouped=value;}
        }
        #endregion
    }
    #endregion
}